<?php

namespace App\Http\Controllers;
use App\Models\Jabatan;
use Request;
use Validator;
use Input;
use Redirect;
class Jabatan_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('Admin');
    }
    public function index()
    {
        $jabatan=Jabatan::all();
      
        return view('Jabatan.index',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jabatan.create');
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
            'kode_jabatan'=>'required|unique:jabatans',
            'nama_jabatan'=>'required',
            'besaran_uang'=>'required'
            );

        $message= array(
            
            'nama_jabatan.required'=>'Maaf Data Masih Kosong',
            'kode_jabatan.required'=>'Maaf Data Masih Kosong',
            'kode_jabatan.unique'=>'data sudah ada',
            'besaran_uang.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
         return Redirect('jabatan/create')->withErrors($validation)->withInput();
        }

         $jabatans=Request::all();
        Jabatan::create($jabatans);
        $jabatan=Jabatan::all();
        return redirect('jabatan');
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
        $jabatan=Jabatan::find($id);
        return view('Jabatan.edit',compact('jabatan'));
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
        $jabatan=Jabatan::where('id',$id)->first();
           if ($jabatan['kode_jabatan'] !=Request('kode_jabatan')) {
              $rules = array(
            'kode_jabatan'=>'required|unique:jabatans',
            'nama_jabatan'=>'required',
            'besaran_uang'=>'required'
            );
           }
           else{
            $rules = array(
            'kode_jabatan'=>'required',
            'nama_jabatan'=>'required',
            'besaran_uang'=>'required'
            );
           }

        

        $message= array(
            
            'nama_jabatan.required'=>'Maaf Data Masih Kosong',
            'kode_jabatan.required'=>'Maaf Data Masih Kosong',
            
            'besaran_uang.required'=>'Maaf Data Masih Kosong'
            
            );
       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
           return Redirect::back()->withInput()->withErrors($validation->messages());
        }
         $update=Request::all();
        $jabatan=Jabatan::find($id);
        $jabatan->update($update);
        return redirect('jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $jabatan=Jabatan::find($id)->delete();
        return redirect('jabatan');
    }
}
