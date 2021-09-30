<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAbonnent extends Model
{
    use HasFactory;
    protected $table = 'user_abonnents';
    public $timestamps = true;

    protected $fillable = [
        'user',
        'prix',
        'dateFin',
    ];

    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class);
    }
}
