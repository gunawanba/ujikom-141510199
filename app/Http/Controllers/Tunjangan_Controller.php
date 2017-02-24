<?php

namespace App\Http\Controllers;

use Request;
use App\Models\Tunjangan;
use App\Models\Golongan;
use App\Models\Jabatan;
use Validator;
use Input;
class Tunjangan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
         $tunjangan=Tunjangan::orderby('id','desc')->paginate(5);
        if(request()->has('kode_tunjangan')){
            $tunjangan=Tunjangan::where('kode_tunjangan',request('kode_tunjangan'))->paginate(0);
        }
        return view('tunjangan.index',compact('tunjangan'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $jabatan=Jabatan::all();
         $golongan=Golongan::all();
        return view('tunjangan.create',compact('jabatan','golongan'));
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'kode_tunjangan'=>'required|unique:tunjangans',
            'status'=>'required',
            'jumlah_anak'=>'required|min:11|numeric',
            'besaran_uang'=>'required|'
            );

        $message= array(
            
            'status.required'=>'Maaf Data Masih Kosong',
            'kode_tunjangan.required'=>'Maaf Data Masih Kosong',
            'kode_tunjangan.unique'=>'data sudah ada',
            'jumlah_anak.required'=>'Maaf Data Masih Kosong',
            'besaran_uang.min'=>'Maaf Anda Salah Memasukan Isian',
            'besaran_uang.numeric'=>'Maaf Data Masih Kosong',
            'besaran_uang.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
         return Redirect('tunjangan/create')->withErrors($validation)->withInput();
        }

         $tunjangans=Request::all();
        Tunjangan::create($tunjangans);
        $tunjangan=Tunjangan::all();
        return redirect('tunjangan');
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
        $tunjangan=Tunjangan::find($id);
        $jabatan=Jabatan::all();
        $golongan=Golongan::all();
        return view('tunjangan.edit',compact('tunjangan','golongan','jabatan'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $tunjangan =Tunjangan::find($id);
         if ($tunjangan['kode_tunjangan'] !=Request('kode_tunjangan')) {
                $rules = array(
            'kode_tunjangan'=>'required|unique:golongans',
            'status'=>'required',
            'jumlah_anak'=>'required',
            'besaran_uang'=>'required|min:11|numeric'
            );
           }
           else{
             $rules = array(
            'kode_tunjangan'=>'required',
            'status'=>'required',
            'jumlah_anak'=>'required',
            'besaran_uang'=>'required|min:11|numeric'
            );
           }
         

        $message= array(
            
            'status.required'=>'Maaf Data Masih Kosong',
            'kode_tunjangan.required'=>'Maaf Data Masih Kosong',
            'kode_tunjangan.unique'=>'data sudah ada',
            'jumlah_anak.required'=>'Maaf Data Masih Kosong',
        'besaran_uang.min'=>'Maaf Anda Salah Memasukan Isian',
            'besaran_uang.numeric'=>'Maaf Data Masih Kosong',
            'besaran_uang.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
           return Redirect::back()->withInput()->withErrors($validation->messages());
        }
         $update=Request::all();
        $tunjangan=Tunjangan::find($id);
        $tunjangan->update($update);
        return redirect('tunjangan');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tunjangan=Tunjangan::find($id)->delete();
        return redirect('tunjangan');    }
}
