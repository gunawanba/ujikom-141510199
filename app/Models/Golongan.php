<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
      protected $table ='golongans';
    protected $fillable = array('kode_golongan',
    	'nama_golongan',
    	'besaran_uang'
    	);
 protected $visible = array('kode_golongan',
    	'nama_golongan',
    	'besaran_uang'
    	);
 public function kotegari_lembur() {
        return $this->hasMany('App\Models\Kotegori_lembur', 'golongan_id');
    }
    public function tunjangan() {
        return $this->hasMany('App\Models\Tunjangan', 'golongan_id');
    }
    public function pegawai() {
        return $this->hasMany('App\Models\Pegawai', 'golongan_id');
    }
}
