<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lembur_pegawai;
use App\Models\Kategori_lembur;
use App\Models\Pegawai;
use Validator;
use Input;
class Lembur_Pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    { $lembur_pegawai=Lembur_pegawai::all();  
        $pegawai=Pegawai::all();
        
         
        
       // if ($lembur_pegawai=Lembur_pegawai::find('id')) {
         //     }
       // else{
       //   $lembur_pegawai=Lembur_pegawai::selectRaw("sum(lembur_pegawais.jumlah_jam) as jumlah_jam,lembur_pegawais.kode_lembur_id as kode_lembur_id,lembur_pegawais.pegawai_id as pegawai_id")
       //  ->GroupBy('kode_lembur_id','pegawai_id')->get();
       // }
        return view('lembur_pegawai.index',compact('lembur_pegawai'));
    }
public function error()
    {
      $kategori_lembur=Kategori_lembur::all();
      $pegawai=Pegawai::all();
          return view('lembur_pegawai.error',compact('kategori_lembur','pegawai'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $kategori_lembur=Kategori_lembur::all();
      $pegawai=Pegawai::all();
          return view('lembur_pegawai.create',compact('kategori_lembur','pegawai'));
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
            
            'pegawai_id'=>'required',
            'jumlah_jam'=>'required'
            );

        $message= array(
            
            'pegawai_id.required'=>'Maaf Data Masih Kosong',
          
            'jumlah_jam.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
         return Redirect('lembur_pegawai/create')->withErrors($validation)->withInput();
        }
        else{
          $pegawai=Pegawai::where('id',Request('pegawai_id'))->first();
            $kategori_lembur=Kategori_lembur::where('jabatan_id',$pegawai->jabatan_id)->where('golongan_id',$pegawai->golongan_id)->first();
            if ($kategori_lembur->id==$pegawai->id) {
               $lembur_pegawai = new Lembur_pegawai;
            $lembur_pegawai->kode_lembur_id = $kategori_lembur->id;
            $lembur_pegawai->pegawai_id = $request->get('pegawai_id');
            $lembur_pegawai->jumlah_jam = $request->get('jumlah_jam');
             $lembur_pegawai->save();
             return redirect('lembur_pegawai');
            }
            return redirect('error');
         }
            
            
            
             
        
        
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
         $lembur_pegawai=Lembur_pegawai::selectRaw("sum(lembur_pegawais.jumlah_jam) as jumlah_jam,lembur_pegawais.kode_lembur_id as kode_lembur_id,lembur_pegawais.pegawai_id as pegawai_id")
        ->GroupBy('kode_lembur_id','pegawai_id')->get();
        return view('lembur_pegawai.edit',compact('lembur_pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { $lembur_pegawai =Lembur_pegawai::find($id);
         if ($lembur_pegawai['kode_lembur_id'] !=Request('kode_lembur_id')) {
                 $rules = array(
            
            'jumlah_jam'=>'required'
            );
           }
           else{
            $rules = array(
           
            'jumlah_jam'=>'required'
            );
           }

     

        $message= array(
            
            
            'jumlah_jam.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
           return Redirect::back()->withInput()->withErrors($validation->messages());
        }
          $lembur_pegawai->kode_lembur_id = $request->get('kode_lembur_id');
            $lembur_pegawai->pegawai_id = $request->get('pegawai_id');
            $lembur_pegawai->jumlah_jam = $request->get('jumlah_jam');
            
            
            
            $lembur_pegawai->save();
            return redirect('lembur_pegawai'); 
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lembur_pegawai=Lembur_pegawai::selectRaw("sum(lembur_pegawais.jumlah_jam) as jumlah_jam,lembur_pegawais.kode_lembur_id as kode_lembur_id,lembur_pegawais.pegawai_id as pegawai_id")
        ->GroupBy('kode_lembur_id','pegawai_id')->delete();
        return redirect('lembur_pegawai');    }
}
