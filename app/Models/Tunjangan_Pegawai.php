<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tunjangan_Pegawai extends Model
{
    protected $table ='tunjangan_pegawais';
    protected $fillable = array('id','kode_tunjangan_id',
    	'pegawai_id'
    	);
 protected $visible = array('id','kode_tunjangan_id',
    	'pegawai_id'
    	);
  public function pegawai() {
        return $this->belongsTo('App\Models\Pegawai', 'pegawai_id');
    }
    public function tunjangan() {
        return $this->belongsTo('App\Models\Tunjangan', 'kode_tunjangan_id');
    }
     public function penggajian() {
        return $this->hasOne('App\Models\Penggajian', 'tunjangan_pegawai_id');
    }
     
}
