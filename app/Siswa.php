<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public function kompkeahlian()
    {
        return $this->belongsTo('App\KompetensiKeahlian', 'kompetensi_id');
    }
    public function walisiswa()
    {
        return $this->hasMany('App\WaliMurid', 'siswa_id');
    }
    public function nilai()
    {
        return $this->hasMany('App\Nilai', 'siswa_id');
    }
}
