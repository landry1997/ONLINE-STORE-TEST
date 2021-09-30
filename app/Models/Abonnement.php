<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Abonnement extends Model
{
    use HasFactory;
    protected $table = 'abonnements';
    public $timestamps = true;

    protected $fillable = [
        'durée',
        'prix',
        'createur',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'createur');
    }

    public function userabo()
    {
        return $this->belongsTo(UserAbonnent::class);
    }
}
