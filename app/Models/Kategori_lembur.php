<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori_lembur extends Model
{
     protected $table ='kategori_lemburs';
    protected $fillable = array('kode_lembur',
    	'jabatan_id',
    	'golongan_id',
    	'basaran_uang'
    	);
 protected $visible = array('kode_lembur',
    	'jabatan_id',
    	'golongan_id',
    	'basaran_uang'
    	);
  public function golongan() {
        return $this->belongsTo('App\Models\Golongan', 'golongan_id');
    }
    public function jabatan() {
        return $this->belongsTo('App\Models\Jabatan', 'jabatan_id');
    }
    public function lembur_pegawai() {
        return $this->hasMany('App\Models\Lembur_pegawai', 'kode_lembur_id');
    }
}
