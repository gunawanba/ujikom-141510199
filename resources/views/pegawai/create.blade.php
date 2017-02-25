@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">

                        <h3 class="animated fadeInLeft">Tambah Data Pegawai</h3>
                       <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Pegawai</p>

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                              
                                 
                      
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Register User</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pegawai') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">Name</h4></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
<span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                               
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('permession') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">permession</h4></label>

                            <div class="col-md-6">
                               <td>
            <select name="permession" class="form-control">
           
            <option value="">pilih</option>
          
           @if (Auth::user()->permession=='Admin')
           <option value="Hrd">Hrd</option>
            <option value="Keuangan">Keuangan</option>
              <option value="Admin">Admin</option>
              <option value="Pegawai">Pegawai</option>
              @else
              <option value="Pegawai">Pegawai</option>
               @endif
            </select>

 
        </td>

                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">E-Mail Address</h4></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

                                 <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
  
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">Password</h4></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
  <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"> <h4 class="animated fadeInLeft">Confirm Password</h4></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>

                        
                  

                </div>

            </div>

        </div>
       <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Register Pegawai</div>
                <div class="panel-body">
                    
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nip</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="nip" value="{{ old('nip') }}"  autofocus>
                               
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('jabatan_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Jabatan</label>

                            <div class="col-md-6">
                                 <select name="jabatan_id" class="form-control">
                                 
            @foreach ($jabatan as $jabatans)
            <option value="{{$jabatans->id}}">{{$jabatans->nama_jabatan}}</option>
            @endforeach
            </select>

 
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('golongan_id') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">golongan</label>

                            <div class="col-md-6">
                                 <select name="golongan_id" class="form-control">
                            
            @foreach ($golongan as $golongans)
            <option value="{{$golongans->id}}">{{$golongans->nama_golongan}}</option>
            @endforeach
            </select>
                          
                            </div>
                        </div>
<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">foto</label>

                            <div class="col-md-6">
                                <input  type="file"  name="photo" value="{{ old('photo') }}">
@if ($errors->has('photo'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('photo') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>
                        </div>

                     

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
    </div>



</div>

      </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>
@endsection
