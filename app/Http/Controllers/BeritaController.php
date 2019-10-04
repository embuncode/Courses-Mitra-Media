<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Berita;
Use App\Models\Kategori;
Use App\Models\Pesan;
Use DB;
use DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.berita', compact('beritas', 'pesans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.add-berita', compact('kategoris', 'pesans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required|max:30',
            'deskripsi' => 'required',
            'author'    => 'required',
            'kategori'  => 'required'
            ]);

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->deskripsi = $request->deskripsi;
        $berita->author = $request->author;
        $berita->kategori_id = $request->kategori;


        $berita['image'] = null;

        if ($request->file('image')) {
            $berita['image'] = '/admin/image/berita/'.str_slug($berita['judul'], '-').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/admin/image/berita/'), $berita['image']);
            $berita->save();
        }

        return redirect('/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beritas = Berita::find($id);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesan    = $countpesan->count();
        
        return view ('admin.show_berita', ['berita'=>$beritas, 'pesans'=>$pesan]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beritas = Berita::find($id);
        $kategoris = Kategori::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.edit_berita', compact('beritas', 'kategoris', 'pesans'));
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
        $berita = Berita::findOrFail($id);

        $input['image'] = $berita->image;

        if ($request->hasFile('image')) {
            if ($berita->image != NULL) {
                unlink(public_path($berita->image));
            }
            $input['image'] = '/admin/image/berita/'.str_slug($input['judul'], '-').'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('/admin/image/berita/'), $input['image']);
        }

        $berita->update($input);

        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id); 

        if ($berita->image != NULL) {
            unlink(public_path($berita->image));
        }

        Berita::destroy($id);

        return redirect('/berita');
    }

    public function apiBerita() {
        $berita = Berita::all();

        return DataTables::of($berita)
            ->addColumn('show_picture', function($berita) {
                if ($berita->image == NULL) {
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'.url($berita->image).'">';
            })
            ->addColumn('action', function($berita) {
                return '
                        <a href="/berita/show/'.$berita->id.'" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-eye-open"></i>Show</a>

                        <a href="/berita/edit/'.$berita->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i>Edit</a>
                        
                        <a href="#" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modalDelete'.$berita->id.'"><i class="fa fa-trash-o"></i> Delete</a>';

            })->rawColumns(['show_picture', 'action'])
              ->addIndexColumn()
              ->removeColumn('id')
              ->make(true);
    }
}
