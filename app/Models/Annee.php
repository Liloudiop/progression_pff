<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    use HasFactory;

    public function Pff()
    {
        return $this->hasMany(Pff::class);
    }

    public function Planning()
    {
        return $this->hasMany(Planning::class);
    }

    public function Semestre()
    {
        return $this->hasMany(Semestre::class);
    }

    public function Evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }
}
