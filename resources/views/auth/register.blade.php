@extends('layouts2.app')

@section('content')
<div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Jabatan</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
 <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


           

         


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Register User</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pegawai') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('permession') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">permession</label>

                            <div class="col-md-6">
                               <td>
            <select name="permession" class="form-control">
           
            <option value="">pilih</option>
          
           @if (Auth::user()->permession=='Admin')
           <option value="Keuangan">Hrd</option>
            <option value="Keuangan">Keuangan</option>
              <option value="Admin">Admin</option>
              @else
              <option value="Pegwai">Pegwai</option>
               @endif
            </select>
        </td>

 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
                                <input  type="text" class="form-control" name="nip" value="{{ old('nip') }}" required autofocus>
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
                                <input  type="file"  name="photo" value="{{ old('photo') }}" required>

                                
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


@endsection
