<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $timestamps = true;

    protected $fillable = [
        'titre',
        'titreEn',
        'statut',
        'createur',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'createur');
    }

}
