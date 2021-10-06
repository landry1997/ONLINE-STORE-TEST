<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $table = 'questions';
    public $timestamps = true;

    protected $fillable = [
        'contenu',
        'instructions',
        'createur',
        'coursId',
        'statut'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'createur');
    }

    public function reponse()
    {
        return $this->hasMany(Reponses::class);
    }
    public function cours()
    {
        return $this->belongsTo(cours::class, 'coursId');
    }
}
