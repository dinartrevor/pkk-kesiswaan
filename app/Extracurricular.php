<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    protected $fillable = [
        'name','descriptions','user_id','email','name_coach'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function extracurricular_student()
    {
        return $this->hasMany(ExtracurricularStudent::class);
    }
}
