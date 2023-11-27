<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    /**
     * Les attributs des animaux
     *
     * @var array
     */
    protected $fillable = [
        'name', 'species', 'sexe', 'age', 'country', 'comment',
    ];
}
