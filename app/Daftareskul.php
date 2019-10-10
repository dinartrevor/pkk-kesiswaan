<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jurusan;
class Daftareskul extends Model
{
    protected $table='daftareskul';
    protected $guarded=['id'];
    
    public function Jurusan(){
        return $this->belongsTo(\App\Jurusan::class, 'jurusan_id','id');
    }
    

}
