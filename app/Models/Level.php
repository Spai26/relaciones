<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    /*
     * relation 1 to m Level (Level) - Usuario (User)
     !importante Me interesa ver desde el nivel que pertenece cada usuario
    */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
