<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penggajian;
use App\Models\Lembur_pegawai;
use App\Models\Kategori_lembur;
use App\Models\Pegawai;
use Validator;
use Input;
use Carbon\Carbon;
class Lembur_Pegawai_Controller extends Controller
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
       $current = Carbon::now();

// add 30 days to the current time
$trialExpires = $current->addDays(30);
        
        $lembur_pegawai=Lembur_pegawai::orderby('id','desc')->paginate(5);  
        $pegawai=Pegawai::all();
        
         
        
       // if ($lembur_pegawai=Lembur_pegawai::find('id')) {
         //     }
       // else{
       //   $lembur_pegawai=Lembur_pegawai::selectRaw("sum(lembur_pegawais.jumlah_jam) as jumlah_jam,lembur_pegawais.kode_lembur_id as kode_lembur_id,lembur_pegawais.pegawai_id as pegawai_id")
       //  ->GroupBy('kode_lembur_id','pegawai_id')->get();
       // }
         if(request()->has('kode_lembur')){
            $lembur_pegawai=Lembur_pegawai::where('kode_lembur',request('kode_lembur','penggajian','pegawai'))->paginate(0);
        }
        return view('lembur_pegawai.index',compact('lembur_pegawai','trialExpires','pegawai','penggajian'));
    }
public function error()
    {
        $penggajian=Penggajian::all();
      $kategori_lembur=Kategori_lembur::all();
      $pegawai=Pegawai::all();
          return view('lembur_pegawai.error',compact('kategori_lembur','pegawai','penggajian'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penggajian=Penggajian::all();
      $kategori_lembur=Kategori_lembur::all();
      $pegawai=Pegawai::all();
          return view('lembur_pegawai.create',compact('kategori_lembur','pegawai','penggajian'));
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
            'jumlah_jam'=>'required|numeric'
            );

        $message= array(
            
            'pegawai_id.required'=>'Maaf Data Masih Kosong',
            'jumlah_jam.numeric'=>'input angka',
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
            if (isset($kategori_lembur->id)) {
               $lembur_pegawai = new Lembur_pegawai;
            $lembur_pegawai->kode_lembur_id = $kategori_lembur->id;
            $lembur_pegawai->pegawai_id = $request->get('pegawai_id');
            
            $lembur_pegawai->jumlah_jam = $request->get('jumlah_jam');
             $lembur_pegawai->save();
             return redirect('lembur_pegawai');
            }
            else{
            return redirect('error');
         }
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
        $penggajian=Penggajian::all();
         $lembur_pegawai=Lembur_pegawai::find($id);
         $kategori_lembur=Kategori_lembur::all();
      $pegawai=Pegawai::all();
        return view('lembur_pegawai.edit',compact('lembur_pegawai','kategori_lembur','pegawai','penggajian'));
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
            
            'jumlah_jam'=>'required|numeric'
            );
           }
           else{
            $rules = array(
           
            'jumlah_jam'=>'required|numeric'
            );
           }

     

        $message= array(
            
             'jumlah_jam.numeric'=>'input angka',
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