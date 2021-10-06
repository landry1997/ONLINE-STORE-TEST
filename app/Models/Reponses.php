<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponses extends Model
{
    use HasFactory;

    protected $table = 'reponses';
    public $timestamps = true;

    protected $fillable = [
        'contenu',
        'reponse',
        'createur',
        'questionId',
        'statut'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'createur');
    }

    public function question()
    {
        return $this->belongsTo(Questions::class, 'questionId');
    }
}
