<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*
     * relation 1 to 1 Usuario (User) - Perfil (Profile)
     !importante Me interesa ver desde el usuario acceder al perfil.
    */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /*
     * relation 1 to m User - Level
     !importante  Un usuario pertenece a  un nivel  */
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    /*
    * relation m to m  User - Group
    !importante  Un usuario pertenece a  varios  un grupos
    * withtemestamp nos facilita el registro de fecha
    */

    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
}
