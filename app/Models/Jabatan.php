<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table ='jabatans';
    protected $fillable = array('kode_jabatan',
    	'nama_jabatan',
    	'besaran_uang'
    	);
 protected $visible = array('kode_golongan',
    	'nama_golongan',
    	'besaran_uang'
    	);
 public function kotegari_lembur() {
        return $this->hasMany('App\Models\Kotegori_lembur', 'jabatan_id');
    }
    public function tunjangan() {
        return $this->hasMany('App\Models\Tunjangan', 'jabatan_id');
    }
     public function pegawai() {
        return $this->hasMany('App\Models\Pegawai', 'jabatan_id');
    }
}
