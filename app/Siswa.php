<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama', 'kelas', 'alamat', 'foto'];

    public function nilai(){
     return $this->hasMany(Nilai::class);
}
}
