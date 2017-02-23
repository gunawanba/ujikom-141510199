<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use Request;
use Validator;
use Input;
use Redirect;
class Golongan_Controller extends Controller
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
         $golongan=Golongan::orderby('id','desc')->paginate(5);
     if(request()->has('kode_golongan')){
            $golongan=Golongan::where('kode_golongan',request('kode_golongan'))->paginate(0);
        }
        return view('golongan.index',compact('golongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create');
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
            'kode_golongan'=>'required|unique:golongans',
            'nama_golongan'=>'required',
            'besaran_uang'=>'required'
            );

        $message= array(
            
            'nama_golongan.required'=>'Maaf Data Masih Kosong',
            'kode_golongan.required'=>'Maaf Data Masih Kosong',
            'kode_golongan.unique'=>'data sudah ada',
            'besaran_uang.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
         return Redirect('golongan/create')->withErrors($validation)->withInput();
        }

         $golongans=Request::all();
        Golongan::create($golongans);
        $golongan=Golongan::all();
        return redirect('golongan');
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
         $golongan=Golongan::find($id);
        return view('golongan.edit',compact('golongan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
           $golongan=Golongan::where('id',$id)->first();
           if ($golongan['kode_golongan'] !=Request('kode_golongan')) {
                $rules = array(
            'kode_golongan'=>'required|unique:golongans',
            'nama_golongan'=>'required',
            'besaran_uang'=>'required'
            );
           }
           else{
            $rules = array(
            'kode_golongan'=>'required',
            'nama_golongan'=>'required',
            'besaran_uang'=>'required'
            );
           }
        $message= array(
            
            'nama_golongan.required'=>'Maaf Data Masih Kosong',
            'kode_golongan.required'=>'Maaf Data Masih Kosong',
            'kode_golongan.unique'=>'data sudah ada',
            'besaran_uang.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
           return Redirect::back()->withInput()->withErrors($validation->messages());
        }
         $update=Request::all();
        $golongan=Golongan::find($id);
        $golongan->update($update);
        return redirect('golongan');
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $golongan=Golongan::find($id)->delete();
        return redirect('golongan');
    }
}
