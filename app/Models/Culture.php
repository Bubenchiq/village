<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'seed_price',
        'crop_price',
        'grow_duration',
        'planted_at',
        'growed_at',
    ];
}
