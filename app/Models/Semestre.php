<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;

    public function Annee(){
        return $this->belongsTo(Annee::class);
    }

    public function Evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }
}
