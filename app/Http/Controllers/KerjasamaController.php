<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
use DataTables;
Use App\Models\Kerjasama;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerjasama = Kerjasama::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.kerjasama', compact('kerjasama', 'pesans'));
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
        $input['gambar'] = null;

        if ($request->hasFile('gambar')) {
            $input['gambar'] = '/admin/image/kerjasama/'.str_slug($input['nama'], '-').'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('/admin/image/kerjasama/'), $input['gambar']);
        }

        Kerjasama::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kerjasama = Kerjasama::find($id);
        return $kerjasama;
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
        $kerjasama = Kerjasama::findOrFail($id);

        $input['gambar'] = $kerjasama->gambar;

        if ($request->hasFile('gambar')) {
            if ($kerjasama->gambar != NULL) {
                unlink(public_path($kerjasama->gambar));
            }
            $input['gambar'] = '/admin/image/kerjasama/'.str_slug($input['nama'], '-').'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('/admin/image/kerjasama/'), $input['gambar']);
        }

        $kerjasama->update($input);

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
        $kerjasama = Kerjasama::findOrFail($id); 

        if ($kerjasama->gambar != NULL) {
            unlink(public_path($kerjasama->gambar));
        }

        Kerjasama::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

    public function apiKerjasama() {
        $kerjasama = Kerjasama::all();

        return DataTables::of($kerjasama)
            ->addColumn('show_picture', function($kerjasama) {
                if ($kerjasama->gambar == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($kerjasama->gambar).'">';
            })
            ->addColumn('action', function($kerjasama) {
                return '
                        <a onclick="editForm('.$kerjasama->id.')" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a>
                        <a onclick="deleteData('.$kerjasama->id.')" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
