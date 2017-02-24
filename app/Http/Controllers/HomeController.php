<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggajian;
use App\Models\Pegawai;
use App\User;
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
    public function user_create(){
        return view('pegawai.admin');
    }
    public function user_restore(Request $request){
        $data = $request->all();
        // dd($data);
        User::create([
             'name' => $data['name'],
            'email' => $data['email'],
            'permession' => $data['permession'],
            'password' => bcrypt($data['password']),
        ]);
        return redirect('/');
    }
}
