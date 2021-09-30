<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;
    protected $table = 'cours';
    public $timestamps = true;

    protected $fillable = [
        'nom',
        'nom_en',
        'image',
        'description',
        'description_en',
        'pilierId',
        'type',
        'statut',
        'createur',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'createur');
    }

    public function pilier()
    {
        return $this->belongsTo(Piliers::class, 'pilierId');
    }
}
