<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comments;
class Forums extends Model
{
    protected $table='forums';
    protected $guarded = ['id'];

    public function Comments(){
        return $this->hasMany('App\Comments','forums_id','id');
    }
}