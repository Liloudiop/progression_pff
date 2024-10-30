<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    public function cours(){
        return $this->hasMany(CoursNew::class, 'formateur_id');
    }
}
