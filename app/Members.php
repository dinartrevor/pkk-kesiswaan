<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
        'name','nis','telephone','extracurricular_id','class','department'
    ];

    public function extracurricular()
    {
        return $this->belongsTo(Extracurricular::class);
    }
}
