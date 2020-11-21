<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Ruang;
use App\peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class peminjamanController extends Controller
{
    // public function index(){
    //     $barangs = DB::table('barangs')->get();
    //     return view('formPinjaman',['barangs' => 'barangs']);

    //     $ruang = DB::table('ruang')->get();
    //     return view('ruang',['ruang' => 'ruang']);

    // }
    public function index(){
        $barangs = \App\Barang::paginate(20);
        return view('formPinjaman', ['barangs'=>$barangs]);
    }

    public function pinjam(Request $request){
        // dd($request->all());
    peminjaman::create([
        'nama_barang' => $request->barang,
        'kelas' => $request->kelas,
        'nama_siswa' => $request->nama
    ]);
    return redirect('pinjam');
    }

}
