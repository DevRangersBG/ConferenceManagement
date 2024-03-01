<?php

namespace App\Models\Conference;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThematicArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
