<?php

namespace App\Http\Controllers;

use DB;
use App\Models\PaketKursus;
use App\Models\Pengajar;
use DataTables;
use Illuminate\Http\Request;

class PaketKursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = PaketKursus::all();
        $pengajars = Pengajar::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.paketkursus', compact('pesans', 'pengajars', 'pakets'));
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
            $input['gambar'] = '/admin/image/paket/'.str_slug($input['judul_kursus'], '-').'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('/admin/image/paket/'), $input['gambar']);
        }

        PaketKursus::create($input);

        return response()->json([
            'success' => true
        ]);
    }

    public function show($id)
    {
        $paketkursus = PaketKursus::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();
        
        return view ('admin.detailkursus', compact('paketkursus', 'pesans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paket_kursus = PaketKursus::find($id);
        return $paket_kursus;
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
        $paket = PaketKursus::findOrFail($id);

        $input['gambar'] = $paket->gambar;

        if ($request->hasFile('gambar')) {
            if ($paket->gambar != NULL) {
                unlink(public_path($paket->gambar));
            }
            $input['gambar'] = '/admin/image/paket/'.str_slug($input['judul_kursus'], '-').'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move(public_path('/admin/image/paket/'), $input['gambar']);
        }

        $paket->update($input);

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
        $paket_kursus = PaketKursus::findOrFail($id); 

        if ($paket_kursus->picture != NULL) {
            unlink(public_path($paket_kursus->gambar));
        }

        PaketKursus::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

    public function apiPaketKursus() {
        $paket_kursus = PaketKursus::all();

        return DataTables::of($paket_kursus)
            ->addColumn('show_picture', function($paket_kursus) {
                if ($paket_kursus->gambar == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($paket_kursus->gambar).'">';
            })
            ->addColumn('action', function($paket_kursus) {
                return '
                        <a href="/paket_kursus/detail/'.$paket_kursus->id.'" class="btn btn-info btn-xs"><i class="glyphicon  glyphicon-eye-open"></i>Show</a>
                        <a onclick="editForm('.$paket_kursus->id.')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        <a onclick="deleteData('.$paket_kursus->id.')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                        ';
            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
