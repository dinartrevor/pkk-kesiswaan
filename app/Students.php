<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public function extracurricular_student()
    {
        return $this->hasMany(ExtracurricularStudent::class);
    }
}
