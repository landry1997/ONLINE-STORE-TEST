<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interets extends Model
{
    use HasFactory;
    protected $table = 'interets';
    public $timestamps = true;

    protected $fillable = [
        'bio',
        'genre',
        'pays',
        'region',
        'ville',
        'activite',
        'secteur',
        'statut',
        'facebook',
        'linkedin',
        'twitter',
        'siteweb',
        'createur'

    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
