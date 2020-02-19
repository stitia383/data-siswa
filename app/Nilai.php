<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['nama', 'mapel', 'nilai'];

    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
}
