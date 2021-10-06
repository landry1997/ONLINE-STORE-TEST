<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponseUser extends Model
{
    use HasFactory;

    protected $table = 'response_users';
    public $timestamps = true;

    protected $fillable = [
        'coursId',
        'reponseId',
        'createur',
        'questionId',
        'statut',
    ];
}
