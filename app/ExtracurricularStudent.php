<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtracurricularStudent extends Model
{
    protected $table = "extracurricular_students";
    protected $fillable =[
        'extracurriculars_id', 'students_id'
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    public function extracurricular()
    {
        return $this->belongsTo(Extracurricular::class);
    }
}
