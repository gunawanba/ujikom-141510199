<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Penggajian;
use App\Models\Tunjangan;
use App\Models\Pegawai;
use App\Models\Tunjangan_pegawai;
use Validator;
use redirect;
use Input;
class Tunjangan_Pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('keuangan');
    }
    public function index()
    {
        $penggajian=Penggajian::all();
        $pegawai=Pegawai::all();
         $tunjangan_pegawai=Tunjangan_pegawai::orderby('id','desc')->paginate(5);
            if(request()->has('kode_tunjangan')){
            $tunjangan=Tunjangan::where('kode_tunjangan',request('kode_tunjangan'))->paginate(0);
        }
        return view('tunjangan_pegawai.index',compact('tunjangan_pegawai','penggajian','pegawai'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penggajian=Penggajian::all();
         $tunjangan=Tunjangan::all();
         $pegawai=Pegawai::all();
        return view('tunjangan_pegawai.create',compact('tunjangan','pegawai','penggajian'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $rules = array(
            
            'kode_tunjangan_id'=>'required',
            'pegawai_id'=>'required'
            );

        $message= array(
            
            'pegawai_id.required'=>'Maaf Data Masih Kosong',
          
            'kode_tunjangan_id.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
         return Redirect('tunjangan_pegawai/create')->withErrors($validation)->withInput();
        }
         // $pegawai=pegawai::where('id',$tunjanganpegawai['id_pegawai'])->first();
          $tunjangan_pegawais=Request::all();
        Tunjangan_pegawai::create($tunjangan_pegawais);
        $tunjangan_pegawai=Tunjangan_pegawai::all();
        return redirect('tunjangan_pegawai');    }

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
        $tunjangan_pegawai=Tunjangan_pegawai::find($id);
        $tunjangan=Tunjangan::all();
         $pegawai=Pegawai::all();
         $penggajian=Penggajian::all();
        return view('tunjangan_pegawai.edit',compact('tunjangan_pegawai','tunjangan','pegawai','penggajian'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $update=Request::all();
        $tunjangan_pegawai=Tunjangan_pegawai::find($id);
        $tunjangan_pegawai->update($update);
        return redirect('tunjangan_pegawai');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $tunjangan_pegawai=Tunjangan_pegawai::find($id)->delete();
        return redirect('tunjangan_pegawai');     }
}
