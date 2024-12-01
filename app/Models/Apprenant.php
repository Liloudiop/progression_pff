<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprenant extends Model
{
    use HasFactory;

    
    public function filiere()
    {
        return $this->belongsTo(Filiere::class, 'filiere_id');
    }

    public function notes(){

        return $this->hasMany(Note::class);
    }

   

}
