<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggajian;
use App\Models\Pegawai;

use auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $penggajian = Penggajian::all();
         $pegawai=Pegawai::all();
        return view('home',compact('penggajian','pegawai'));
    }
   public function gaji($id){
        $datapenggajian  = Penggajian::where('id', $id)->first();
        // dd($data);
         $penggajian = Penggajian::all();
         $pegawai=Pegawai::all();
        return view('penggajian.read', compact('datapenggajian','penggajian','pegawai'));
    }
}
