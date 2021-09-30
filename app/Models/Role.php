<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'name_en',
        'description',
        'description_en'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
