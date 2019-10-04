<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pengajar;
Use App\Models\Pesan;
Use DB;
use DataTables;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajars = Pengajar::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.pengajar', compact('pengajars', 'pesans'));
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
            $input['picture'] = '/admin/image/pengajar/'.str_slug($input['nama_lengkap'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/pengajar/'), $input['picture']);
        }

        Pengajar::create($input);

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
        $pengajars = Pengajar::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();
        
        return view ('admin.show_pengajar', compact('pengajars', 'pesans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengajar = Pengajar::find($id);
        return $pengajar;
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
        $pengajar = Pengajar::findOrFail($id);

        $input['picture'] = $pengajar->picture;

        if ($request->hasFile('picture')) {
            if ($pengajar->picture != NULL) {
                unlink(public_path($pengajar->picture));
            }
            $input['picture'] = '/admin/image/pengajar/'.str_slug($input['nama_lengkap'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/pengajar/'), $input['picture']);
        }

        $pengajar->update($input);

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
        $pengajar = Pengajar::findOrFail($id); 

        if ($pengajar->picture != NULL) {
            unlink(public_path($pengajar->picture));
        }

        Pengajar::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

    public function apiPengajar() {
        $pengajar = Pengajar::all();

        return DataTables::of($pengajar)
            ->addColumn('show_picture', function($pengajar) {
                if ($pengajar->picture == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($pengajar->picture).'">';
            })
            ->addColumn('action', function($pengajar) {
                return '
                        <a href="/pengajar/detail/'.$pengajar->id.'" class="btn btn-info btn-xs"><i class="glyphicon  glyphicon-eye-open"></i>Show</a>
                        <a onclick="editForm('.$pengajar->id.')" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a>
                        <a onclick="deleteData('.$pengajar->id.')" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
