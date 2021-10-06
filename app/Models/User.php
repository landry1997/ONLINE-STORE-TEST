<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Paddle\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $fillable = [
        'name',
        'surname',
        'tel',
        'naissance',
        'photo',
        'statut',
        'createur',
        'password',
        'email'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function interets()
    {
        return $this->belongsToMany(Interets::class);
    }

    public function piliers()
    {
        return $this->hasMany(Piliers::class);
    }

    public function categories()
    {
        return $this->hasMany(Categories::class);
    }

    public function articles()
    {
        return $this->hasMany(Categories::class);
    }

    public function zones()
    {
        return $this->hasMany(Zones::class);
    }


    public function cours()
    {
        return $this->hasMany(Cours::class);
    }

    public function questions()
    {
        return $this->hasMany(questions::class);
    }

    public function reponses()
    {
        return $this->hasMany(reponses::class);
    }

    /**function to verified if user isAdmin */
    public function isAdmin(){
        return $this->roles()->where('name', 'admin')->first();
    }


    public function abonnements()
    {
        return $this->belongsToMany(Abonnement::class);
    }

}
