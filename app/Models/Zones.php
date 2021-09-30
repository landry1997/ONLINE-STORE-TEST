<?php

namespace App\Models;

use App\Models\Fichiers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zones extends Model
{
    use HasFactory;
    protected $table = 'zones';
    public $timestamps = true;

    protected $fillable = [
        'nom_ville',
        'nom_quartier',
        'nom_rue',
        'createur',
        'statut'
    ];

    public function user()
    {
        return $this->hasOne(User::class,'createur');
    }

    public function fichiers()
    {
        return $this->belongsToMany(Fichiers::class);
    }
}
