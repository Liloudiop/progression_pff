<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;

    public function Annee(){
        return $this->belongsTo(Annee::class);
    }

    public function Semestre(){
        return $this->belongsTo(Semestre::class);
    }

    public function Filiere(){
        return $this->belongsTo(Filiere::class);
    }
}
