<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Kategori;
Use DB;
use DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.kategori', compact('kategoris', 'pesans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'nama_kategori'      => $request['nama'],
        ];

        Kategori::create($data);

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
        $kategori = Kategori::find($id);
        return $kategori;
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
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request['nama'];
        $kategori->update();

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
        $kategori = Kategori::findOrFail($id); 

        Kategori::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

     public function apiKategori() {
        $kategori = Kategori::all();

        return DataTables::of($kategori)
            ->addColumn('action', function($kategori) {
                return '<a onclick="editForm('.$kategori->id.')" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a>
                        <a onclick="deleteData('.$kategori->id.')" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
