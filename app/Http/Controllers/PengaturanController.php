<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pengaturan;
Use App\Models\Pesan;
Use DB;
use DataTables;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaturan = Pengaturan::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.pengaturan', compact('pengaturan', 'pesans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.addPengaturan', compact('pesans'));
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

        $input['gambar_home'] = null;

        if ($request->hasFile('gambar_home')) {
            $input['gambar_home'] = '/mitra/img/banner/'.str_slug($input['name_home'], '-').'.'.$request->gambar_home->getClientOriginalExtension();
            $request->gambar_home->move(public_path('/mitra/img/banner/'), $input['gambar_home']);
        }

        $input['gambar_profil'] = null;

        if ($request->hasFile('gambar_profil')) {
            $input['gambar_profil'] = '/admin/image/pengaturan/'.str_slug($input['name_profil'], '-').'.'.$request->gambar_profil->getClientOriginalExtension();
            $request->gambar_profil->move(public_path('/admin/image/pengaturan/'), $input['gambar_profil']);
        }

        Pengaturan::create($input);

        return redirect ('/pengaturan')->with('success','Berhasil Menambahkan Pengaturan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaturans = Pengaturan::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.editPengaturan', compact('pengaturans', 'pesans'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaturans = Pengaturan::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();
        
        return view ('admin.showPengaturan', compact('pengaturans', 'pesans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $pengaturan = Pengaturan::findOrFail($id);

        $input['gambar_home'] = $pengaturan->gambar_home;

        if ($request->hasFile('gambar_home')) {
            if ($pengaturan->gambar_home != NULL) {
                unlink(public_path($pengaturan->gambar_home));
            }
            $input['gambar_home'] = '/mitra/img/banner/'.str_slug($input['name_home'], '-').'.'.$request->gambar_home->getClientOriginalExtension();
            $request->gambar_home->move(public_path('/mitra/img/banner/'), $input['gambar_home']);
        }

        $input['gambar_profil'] = $pengaturan->gambar_profil;

        if ($request->hasFile('gambar_profil')) {
            if ($pengaturan->gambar_profil != NULL) {
                unlink(public_path($pengaturan->gambar_profil));
            }
            $input['gambar_profil'] = '/admin/image/pengaturan/'.str_slug($input['name_profil'], '-').'.'.$request->gambar_profil->getClientOriginalExtension();
            $request->gambar_profil->move(public_path('/admin/image/pengaturan/'), $input['gambar_profil']);
        }

        $pengaturan->update($input);

        return redirect('/pengaturan')->with('success','Berhasil Memperbarui Pengaturan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaturan = Pengaturan::findOrFail($id); 

        if ($pengaturan->gambar_home != NULL) {
            unlink(public_path($pengaturan->gambar_home));
        }

        if ($pengaturan->gambar_profil != NULL) {
            unlink(public_path($pengaturan->gambar_profil));
        }

        Pengaturan::destroy($id);

        return redirect('/pengaturan')->with('success','Berhasil Menghapus Pengaturan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function apiPengaturan() {
        $pengaturan = Pengaturan::all();

        return DataTables::of($pengaturan)
            ->addColumn('show_picture', function($pengaturan) {
                if ($pengaturan->gambar_home == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($pengaturan->gambar_home).'">';
            })
            ->addColumn('action', function($pengaturan) {
                return '
                        <a href="/pengaturan/show/'.$pengaturan->id.'" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-eye-open"></i>Show</a>

                        <a href="/pengaturan/edit/'.$pengaturan->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                        
                        <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalDelete'.$pengaturan->id.'"><i class="fa fa-trash-o"></i> Delete</a>';

            })->rawColumns(['show_picture', 'action'])
              // ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
