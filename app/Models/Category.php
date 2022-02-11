<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * !importante Relation Categoria (Category) - Articulos (Post)
     **Una categoria tiene muchos ...
     */
    public function posts(){
        return $this->hasMany(Post::class);
    }

      /**
     * !importante Relation Categoria (Category) - Video (video)
     */
    public function videos(){
        return $this->hasMany(Video::class);
    }
}
