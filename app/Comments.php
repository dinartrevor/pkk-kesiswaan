<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Forums;
class Comments extends Model
{
    protected $table='comments';
    protected $guarded = ['id'];

    public function Forums(){
        return $this->belongsTo(\App\Forums::class, 'forums_id','id');
    }
}
