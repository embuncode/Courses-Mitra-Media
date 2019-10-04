<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Berita;
Use App\Models\Pesan;
Use App\Models\Komentar;

Use DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $komentars = Komentar::orderBy('id', 'desc')->paginate(3);
        $beritas = Berita::find($id);
        $posts = Berita::orderBy('id', 'desc')->paginate(3);
        $images = Berita::orderBy('id', 'desc')->paginate(8);
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('user.blog-single', compact('beritas', 'posts', 'images', 'pesans', 'komentars'));
    }

    public function komentar(Request $request)
    {
        Komentar::create([
            'berita_id' => $request->berita_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'komentar' => $request->komentar
        ]);

        return redirect('/user/berita');
    }
}