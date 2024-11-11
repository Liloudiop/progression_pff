<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    public function Apprenant()
    {
        return $this->hasMany(Apprenant::class);
    }

    public function Salle()
    {
        return $this->hasMany(Salle::class);
    }

    public function Cours()
    {
        return $this->hasMany(Cours::class);
    }

    public function Pff()
    {
        return $this->hasMany(Pff::class);
    }
    public function Support()
    {
        return $this->hasMany(Support::class);
    }

    public function Evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }

    
}
