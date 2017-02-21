<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
     protected $table ='tunjangans';
    protected $fillable = array('kode_tunjangan',
    	'jabatan_id',
    	'status',
    	'jumlah_anak',
    	'golongan_id',
    	'besaran_uang'
    	);
 protected $visible = array('kode_tunjangan',
    	'jabatan_id',
    	'status',
    	'jumlah_anak',
    	'golongan_id',
    	'besaran_uang'
    	);
  public function golongan() {
        return $this->belongsTo('App\Models\Golongan', 'golongan_id');
    }
    public function jabatan() {
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }
     public function tunjangan_pegawai() {
        return $this->hasMany('App\Models\Tunjanagan_Pegawai', 'kode_tunjangan_id');
    }
     
}
