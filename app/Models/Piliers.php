<?php

namespace App\Models;

use App\Models\User;
use App\Models\Cours;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Piliers extends Model
{
    use HasFactory;

    protected $table = 'piliers';
    public $timestamps = true;

    protected $fillable = [
        'titre',
        'titre_en',
        'contenu',
        'contenu_en',
        'statut',
        'statut_en',
        'createur',
        'image'

    ];
    public function cours()
    {
        return $this->hasMany(Cours::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'createur');
    }
}
