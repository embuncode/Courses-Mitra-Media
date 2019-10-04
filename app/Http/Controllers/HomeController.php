<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Siswa;
Use App\Models\Alumni;
Use App\Models\Pengajar;
Use App\Models\Berita;
Use App\Models\Pesan;
Use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas     = Siswa::count();
        $alumnis    = Alumni::count();
        $pengajars  = Pengajar::count();
        $beritas    = Berita::count();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.home', compact('siswas', 'alumnis', 'pengajars', 'beritas', 'pesans'));
    }
}