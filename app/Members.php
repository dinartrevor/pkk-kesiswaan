<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $fillable = [
        'name','nis','telephone','extracurricular_id','class','department','studens_id'
    ];

    public function students()
    {
        return $this->belongsTo(Students::class)->withPivot(['nis']);
    }

    public function extracurricular()
    {
        return $this->belongsToMany(Extracurricular::class);
    }
}
