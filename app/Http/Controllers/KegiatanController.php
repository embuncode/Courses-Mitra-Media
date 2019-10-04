<?php

namespace App\Http\Controllers;

Use App\Models\Kegiatan;
Use App\Models\Pesan;
Use DB;
use Illuminate\Http\Request;
use DataTables;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.kegiatan', compact('kegiatans', 'pesans'));
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
            $input['picture'] = '/admin/image/kegiatan/'.str_slug($input['nama_kegiatan'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/kegiatan/'), $input['picture']);
        }

        Kegiatan::create($input);

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
        $kegiatan = Kegiatan::find($id);

        return $kegiatan;
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
        $kegiatan = Kegiatan::findOrFail($id);

        $input['picture'] = $kegiatan->picture;

        if ($request->hasFile('picture')) {
            if ($kegiatan->picture != NULL) {
                unlink(public_path($kegiatan->picture));
            }
            $input['picture'] = '/admin/image/kegiatan/'.str_slug($input['nama_kegiatan'], '-').'.'.$request->picture->getClientOriginalExtension();
            $request->picture->move(public_path('/admin/image/kegiatan/'), $input['picture']);
        }

        $kegiatan->update($input);

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
        $kegiatan = Kegiatan::findOrFail($id); 

        if ($kegiatan->picture != NULL) {
            unlink(public_path($kegiatan->picture));
        }

        Kegiatan::destroy($id);

        return response()->json([
            'success' => true
        ]); 
    }

    public function apiKegiatan() {
        $kegiatan = Kegiatan::all();

        return DataTables::of($kegiatan)
            ->addColumn('show_picture', function($kegiatan) {
                if ($kegiatan->picture == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($kegiatan->picture).'">';
            })
            ->addColumn('action', function($kegiatan) {
                return '<a onclick="editForm('.$kegiatan->id.')" class="btn btn-primary btn-xs"> <i class="glyphicon glyphicon-edit"></i> Edit </a>
                        <a onclick="deleteData('.$kegiatan->id.')" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-trash"></i> Delete </a>';
            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}