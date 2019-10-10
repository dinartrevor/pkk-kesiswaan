<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Daftareskul;
class Jurusan extends Model
{
    protected $table='jurusan';
    protected $guarded = ['id'];


    public function Daftareskul(){
        return $this->hasMany('App\Daftareskul','jurusan_id','id');
    }
}
