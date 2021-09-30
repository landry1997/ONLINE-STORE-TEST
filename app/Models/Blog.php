<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    public $timestamps = true;

    protected $fillable = [
        'titre',
        'titreEn',
        'description',
        'descriptionEn',
        'statut',
        'createur',
        'catId',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'createur');
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'catId');
    }
}
