<?php

namespace App\Models;

use App\Models\Zones;
use App\Models\TypeFichiers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fichiers extends Model
{
    use HasFactory;
    protected $table = 'fichiers';
    public $timestamps = true;

    protected $with = ['typeFichier', 'zones'];

    /*protected $fillable = [
        'nom',
        'url',
        'statut',
        'createur',
        'typeId'
    ];*/
    protected $guarded = [];



    public function typeFichier()
    {
        return $this->belongsTo(TypeFichiers::class, 'typeId');
    }

    public function zones()
    {
        return $this->belongsToMany(Zones::class);
    }
}
