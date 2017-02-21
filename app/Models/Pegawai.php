<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
       protected $table ='pegawais';
    protected $fillable = array('nip',
    	'user_id',
    	'jabatan_id',
    	'photo',
    	'golongan_id',
    	'photo'
    	);
 protected $visible = array('nip',
        'user_id',
        'jabatan_id',
        'photo',
        'golongan_id',
        'photo'
        );
  public function golongan() {
        return $this->belongsTo('App\Models\Golongan', 'golongan_id');
    }
    public function jabatan() {
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }
     public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
      public function lembur_pegawai() {
        return $this->hasMany('App\Models\Lembur_pegawai', 'pegawai_id');
    }
      public function tunjangan_pegawai() {
        return $this->hasOne('App\Models\Tunjanagan_Pegawai', 'pegawai_id');
    }
}
