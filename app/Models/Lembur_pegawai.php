<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lembur_pegawai extends Model
{
        protected $table ='lembur_pegawais';
    protected $fillable = array('kode_lembur_id',
    	'pegawai_id',
    	'jumlah_jam'
    	
    	);
 protected $visible = array('kode_lembur_id',
    	'pegawai_id',
    	'jumlah_jam'
    	
    	);
  public function kategori_lembur() {
        return $this->belongsTo('App\Models\Kategori_lembur', 'kode_lembur_id');
    }
    public function pegawai() {
        return $this->belongsTo('App\Models\Pegawai', 'pegawai_id');
    }
     
}
