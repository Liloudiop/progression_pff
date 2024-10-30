<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    public function Formateur(){
        return $this->belongsTo(FormateurNew::class,'formateur_id');
        }
    
        public function Filiere(){
            return $this->belongsTo(Filiere::class, 'filiere_id');
        }
}
