<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Siswa;
use App\Models\Pengajar;
use App\Models\Berita;
use App\Models\Paket1;
use App\Models\Paket2;
use App\Models\Paket3;
use App\Models\Paket4;
use App\Models\PaketKursus;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumni = Alumni::all();
        $paketkursus = PaketKursus::all();
        $pengajars = DB::table('pengajars')->paginate(6);

        return view('template.index', compact('alumni', 'paketkursus', 'pengajars'));
    }

    public function profile()
    {
        return view ('profil.index');
    }

    public function events()
    {
        return view ('user.events');
    }

    public function kontak()
    {
        return view ('kontak.index');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Pesan::create($input);

        return redirect('/user/contact')->with('success', 'Terimakasih telah mengirim pesan!');
    }

    public function alumni() 
    {
        $alumnis = DB::table('alumnis')->paginate(6);

        return view('user.alumni', compact('alumnis'));
    }

    public function berita() 
    {
        // $beritas = DB::table('beritas')->orderBy('id', 'desc')->paginate(3);
        $beritas = Berita::orderBy('id', 'desc')->paginate(3);
        $images = Berita::orderBy('id', 'desc')->paginate(8);

        return view('user.berita', compact('beritas', 'images'));
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table berita
        $beritas = DB::table('beritas')->where('judul', 'like', "%".$cari."%")->paginate(3);
        $images = Berita::orderBy('id', 'desc')->paginate(8);

        return view('user.berita', compact('beritas', 'images'));

    }

    public function kegiatan()
    {
        $kegiatans = DB::table('kegiatans')->paginate(12);

        return view('user.kegiatan', compact('kegiatans'));
    }

    public function siswa()
    {
        $siswas = DB::table('siswas')->paginate(6);

        return view('user.siswa', compact('siswas'));
    }

    public function kursus()
    {
        $paket1 = Paket1::orderBy('id', 'desc')->first();
        
        return view('kursus.index', ['paket1'=>$paket1]);
    }

    public function paketkursus()
    {
        $paketkursus = PaketKursus::all();

        return view('kursus.index', compact('paketkursus'));
    }

    public function pengajar()
    {
        $pengajars = DB::table('pengajars')->paginate(6);

        return view('user.pengajar', compact('pengajars'));
    }
}
