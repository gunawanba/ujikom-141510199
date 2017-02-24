<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\Kategori_lembur;
use App\User;
use App\Models\Penggajian;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Input;
class Pegawai_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function __construct()
    // {
    //     $this->middleware('hrd');
    // }
        use RegistersUsers;
        public function __construct()
    {
        $this->middleware('hrd');
    }
    public function index()
    {
        $penggajian=Penggajian::all();
        $pegawai=Pegawai::orderby('id','desc')->paginate(5);
        // $golongan=Golongan::all();
        // $jabatan=Jabatan::all();
        // $user=User::all();
          if(request()->has('nip')){
            $pegawai=Pegawai::where('nip',request('nip'))->paginate(0);
        }
        return view('pegawai.index',compact('pegawai','golongan','user','jabatan','penggajian'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penggajian=Penggajian::all();
        $pegawai=Pegawai::all();
        $jabatan=Jabatan::all();
         $golongan=Golongan::all();
        return view('pegawai.create',compact('jabatan','golongan','penggajian','pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $rules = array(   'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
                        
                         );
        $message =array('email.unique' =>'Gunakan Email Lain' ,
                        'name.required' =>'Wajib Isi',
                        'email.required' =>'Wajib Isi',
                        'password.required' =>'wajib isi',
                        'password.confirmed' =>'Masukan Password Yang Benar'
                        );

       $validation = Validator::make(Input::all(), $rules, $message);
        if ($validation->fails())
        {
         return Redirect('pegawai/create')->withErrors($validation)->withInput();
        }

         $file = Input::file('photo');
        $destinationPath = public_path().'/assets/image/';
        $filename = $file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);

        if(Input::hasFile('photo')){
          
            $user= User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'permession' => $request->get('permession'),
            'password' => bcrypt($request->get('password')),
        ]);
           $pegawai = new Pegawai;
            $pegawai->nip = $request->get('nip');
            $pegawai->jabatan_id = $request->get('jabatan_id');
            $pegawai->golongan_id = $request->get('golongan_id');
            $pegawai->user_id = $user->id;
            
            $pegawai->photo = $filename;
            $pegawai->save();
            $lama = kategori_lembur::where('jabatan_id',$pegawai->jabatan_id)->where('golongan_id',$pegawai->golongan_id)->first();
            // dd($lama);
            if (isset($lama)) {
            $error=true ;
            $pegawai=pegawai::paginate(5);
            return view('pegawai.index',compact('pegawai'));
        }
    }
             $kategorilembur=new kategori_lembur ;
         $kategorilembur->jabatan_id =$pegawai->jabatan_id;
         $kategorilembur->golongan_id=$pegawai->golongan_id;
         $a =date('dmys');
         $kategorilembur->kode_lembur="KODEKAT".$a."-".$pegawai->jabatan_id."-".$pegawai->golongan_id ;
         $kategorilembur->besaran_uang=0 ;
         $kategorilembur->save();
             return redirect('pegawai');
         
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
         
         $pegawai=Pegawai::find($id);
         $jabatan=Jabatan::all();
         $golongan=Golongan::all();
         return view('pegawai.edit',compact('pegawai','jabatan','golongan','penggajian'));
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
        

        $update=Input::all();
        $logo =Input::file('photo') ;
            $upload='/assets/image/';
            $filename=$logo->getClientOriginalName();
            $success=$logo->move($upload,$filename);
            if($success){
                $pegawai=new pegawai ;
                $pegawai=array('photo'=>$filename,
                                'nip'=>Input::get('nip'),
                                'jabatan_id'=>Input::get('jabatan_id'),
                                'golongan_id'=>Input::get('golongan_id'));
        

                pegawai::where('id',$id)->update($pegawai);
            return redirect('pegawai');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $pegawai=Pegawai::find($id);
        
        $user=User::where('id',$pegawai->user_id)->delete();
        $pegawai->delete();
        return redirect('pegawai');
    }
}
