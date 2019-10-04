<?php

namespace App\Http\Controllers;

Use Illuminate\Http\Request;
Use App\Mail\PesanEmail;
Use Illuminate\Support\Facades\Mail;
Use App\Models\Pesan;
Use DB;
use DataTables;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.template.master', compact('pesans'));
    }

    public function notif()
    {
        $messages = Pesan::all();
        
        $pesans    = DB::table('pesans')->where('status',0)->update(['status' => 1]);

        return view ('admin.pesan', compact('messages', 'pesans'));
    }

    public function balas($id)
    {
        $pesans        = Pesan::find($id);
        $emails        = Pesan::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans        = $countpesan->count();

        return view ('admin.balas_pesan', compact('pesans', 'emails'));
    }

    public function kirimmail(Request $request)
    {
        // Mail::to('sigitghoticmetal2001@gmail.com')->send(new PesanEmail());
 
        // return redirect ('/pesan')->with('success', 'Email Telah Terkirim');
        Mail::send('admin/pesan-email', ['pesan' => $request->pesan], function ($message) use ($request)
        {
            $message->subject($request->subject);
            $message->from('hi.wasissubekti02@gmail.com', 'Sigit');
            $message->to($request->email);
        });
        return redirect ('/pesan')->with('success','Berhasil Kirim Email');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Pesan::create($input);

        return redirect('/user/contact')->with('success', 'Terimakasih telah mengirim pesan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesan = Pesan::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.show_pesan', compact('pesan' ,'pesans'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id); 

        Pesan::destroy($id);

        return redirect('/pesan')->with('success', 'Data berhasil di hapus');
    }

    public function apiPesan() {
        $pesan = Pesan::all();

        return DataTables::of($pesan)
            ->addColumn('action', function($pesan) {
                return '
                        <a href="/pesan/show/'.$pesan->id.'" class="btn btn-info btn-xs"><i class="glyphicon  glyphicon-eye-open"></i>Show</a>
                        <a href="/pesan/balas/'.$pesan->id.'" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a>
                        <a href="/pesan/delete/'.$pesan->id.'" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
