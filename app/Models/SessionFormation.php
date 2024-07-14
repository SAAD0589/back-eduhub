<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionFormation extends Model
{
    use HasFactory;
    public function formationPresentiels()
    {
        return $this->hasMany(FormationPresentiel::class, 'idSessionFormation');
    }
    public function formationDistances()
    {
        return $this->hasMany(FormationDistance::class, 'idSessionFormation');
    }
}
