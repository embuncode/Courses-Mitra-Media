<?php

namespace App\Http\Controllers;

Use App\Models\Siswa;
Use App\Models\Pesan;
Use DB;
use PDF;
use Illuminate\Http\Request;
use App\Exports\SiswasExport;
use Maatwebsite\Excel\Facades\Excel;
use DataTables;

class SiswaController extends Controller
{
    public function export()
    {
        return Excel::download(new SiswasExport, 'siswas.xlsx');
    }

    public function pdf()
    {
        $siswa = Siswa::all();
 
        // $pdf = PDF::loadview('admin/siswa_pdf',['siswa'=>$siswa]);
        $pdf = PDF::loadview('admin/siswa_pdf',['siswa'=>$siswa]);
        $pdf->setPaper('a4', 'landscape');

        // return $pdf->download('laporan-siswa-pdf');
        return $pdf->stream();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = Siswa::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.siswa', compact('siswas', 'pesans'));
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
        $input['picture'] = null;

        if ($request->hasFile('picture')) {
            $input['picture'] = '/admin/image/siswa/'.str_slug($input['nama'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/siswa/'), $input['picture']);
        }

        Siswa::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = Siswa::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();
        
        return view ('admin.show_siswa', compact('siswas', 'pesans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return $siswa;
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
        $siswa = Siswa::findOrFail($id);

        $input['picture'] = $siswa->picture;

        if ($request->hasFile('picture')) {
            if ($siswa->picture != NULL) {
                unlink(public_path($siswa->picture));
            }
            $input['picture'] = '/admin/image/siswa/'.str_slug($input['nama'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/siswa/'), $input['picture']);
        }

        $siswa->update($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id); 

        if ($siswa->picture != NULL) {
            unlink(public_path($siswa->picture));
        }

        Siswa::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

    public function apiSiswa() {
        $siswa = Siswa::all();

        return DataTables::of($siswa)
            ->addColumn('show_picture', function($siswa) {
                if ($siswa->picture == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($siswa->picture).'">';
            })
            ->addColumn('action', function($siswa) {
                return '
                        <a href="/siswa/detail/'.$siswa->id.'" class="btn btn-info btn-xs"><i class="glyphicon  glyphicon-eye-open"></i>Show</a>
                        <a onclick="editForm('.$siswa->id.')" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a>
                        <a onclick="deleteData('.$siswa->id.')" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
