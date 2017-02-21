<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggajian;
use App\Models\Tunjangan_Pegawai;
use App\Models\Tunjangan;
use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\Kategori_lembur;
use App\Models\Lembur_pegawai;
use Input;
use auth ;
use App\Models\Pegawai;
class Penggajian_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
     
         $penggajian=Penggajian::all();
      
        return view('penggajian.index',compact('penggajian','total')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $tunjangan=Tunjangan_pegawai::paginate(10);
         
        return view('penggajian.create',compact('tunjangan','pegawai'));     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $penggajian=Input::all();
         //dd($penggajian);
        $where=Tunjangan_Pegawai::where('id',$penggajian['tunjangan_pegawai_id'])->first();
        //dd($where);
        $wherepenggajian=Penggajian::where('tunjangan_pegawai_id',$where->id)->first();
        //dd($wherepenggajian);
        $wheretunjangan=Tunjangan::where('id',$where->kode_tunjangan_id)->first();
        // dd($where);
        $wherepegawai=Pegawai::where('id',$where->pegawai_id)->first();
        //dd($wherepegawai);
        $wherekategorilembur=Kategori_lembur::where('jabatan_id',$wherepegawai->jabatan_id)->where('golongan_id',$wherepegawai->golongan_id)->first();
        //dd($wherekategorilembur);
        $wherelemburpegawai=Lembur_pegawai::where('pegawai_id',$wherepegawai->id)->first();
        // dd($wherelemburpegawai);
        $wherejabatan=Jabatan::where('id',$wherepegawai->jabatan_id)->first();
        // dd($wherejabatan);
        $wheregolongan=Golongan::where('id',$wherepegawai->golongan_id)->first();
        // dd($wheregolongan);

        $penggajian=new Penggajian ;
        if (isset($wherepenggajian)) {
            $error=true ;
            $tunjangan=Tunjangan_Pegawai::paginate(10);
            return view('penggajian.create',compact('tunjangan','error'));
        }
        elseif (!isset($wherelemburpegawai)) {
            $nol=0 ;
            $penggajian->jumlah_jam_lembur=$nol;
            $penggajian->jumlah_uang_lembur=$nol ;
             $penggajian->status_pengembalian=$request->get('status_pengembalian') ;
            $penggajian->gaji_pokok=$wherejabatan->besaran_uang+$wheregolongan->besaran_uang;
            $penggajian->total_gaji=($wheretunjangan->besaran_uang)+($wherejabatan->besaran_uang+$wheregolongan->besaran_uang);
        $penggajian->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
        $penggajian->petugas_penerima=auth::user()->name ;
        $penggajian->save();
        }
        elseif (!isset($wherelemburpegawai)||!isset($wherekategorilembur)) {
            $nol=0 ;
            $penggajian->jumlah_jam_lembur=$nol;
            $penggajian->jumlah_uang_lembur=$nol ;
              $penggajian->status_pengembalian=$request->get('status_pengembalian') ;
            $penggajian->gaji_pokok=$wherejabatan->besaran_uang+$wheregolongan->besaran_uang;
            $penggajian->total_gaji=($wheretunjangan->besaran_uang)+($wherejabatan->besaran_uang)+($wheregolongan->besaran_uang);
        $penggajian->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
        $penggajian->petugas_penerima=auth::user()->name ;
        $penggajian->save();
        }
        else{

            $penggajian->jumlah_jam_lembur=$wherelemburpegawai->jumlah_jam;
            $penggajian->jumlah_uang_lembur=$wherelemburpegawai->jumlah_jam*$wherekategorilembur->besaran_uang ;
              $penggajian->status_pengembalian=$request->get('status_pengembalian') ;
            $penggajian->gaji_pokok=$wherejabatan->besaran_uang+$wheregolongan->besaran_uang;
            $penggajian->total_gaji=($wherelemburpegawai->jumlah_jam)*($wherekategorilembur->besaran_uang)+($wheretunjangan->besaran_uang)+($wherejabatan->besaran_uang)+($wheregolongan->besaran_uang);
            $penggajian->tanggal_pengambilan =date('d-m-y');
            $penggajian->tunjangan_pegawai_id=Input::get('tunjangan_pegawai_id');
            $penggajian->petugas_penerima=auth::user()->name ;
            $penggajian->save();
            }
            return redirect('penggajian');
                 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tunjangan=Tunjangan::all();
         $pegawai=Pegawai::all();
        return view('penggajian.create',compact('tunjangan','pegawai'));     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawai = new Pegawai;
            $pegawai->nip = $request->get('nip');
            $pegawai->jabatan_id = $request->get('jabatan_id');
            $pegawai->golongan_id = $request->get('golongan_id');
            $pegawai->user_id = $user->id;
            
            $pegawai->photo = $filename;
            $pegawai->save();
             return redirect('pegawai');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $penggajian=Penggajian::find($id)->delete();
        return redirect('penggajian');
            }
}
