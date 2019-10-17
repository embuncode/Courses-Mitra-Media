<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Pengaturan;
Use App\Models\Pesan;
Use DB;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaturan = Pengaturan::all();
        $countpesan    = DB::table('pesans')->where('status', 0);
        $pesans    = $countpesan->count();

        return view ('admin.pengaturan', compact('pengaturan', 'pesans'));
    }
}
