<?php

namespace App\Models;

use App\Models\Zones;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeFichiers extends Model
{
    use HasFactory;
    protected $table = 'type_fichiers';
    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    public function fichier()
    {
        return $this->hasMany(Fichiers::class);
    }

    
}
