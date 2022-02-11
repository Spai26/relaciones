<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    /**
     * ?Post pertenece a ...
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    /**
     * !importante Relation polimorficas
     * * 'comentable' se relaciona con la tabla creada en la migracion* -- hasmnay
     * polimorfica 1 to m
     * ?Tiene muchos
     */
    public function coments()
    {
        return $this->morphMany(Comment::class, 'comentable');
    }

    /**
     * Relation polimorfica 1 to 1
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * Relation polimorfica m to m
     */
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
