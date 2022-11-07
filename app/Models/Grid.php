<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Grid extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'grid',
    ];

    public static function build()
    {
        $grid = [];
        for ($i = 0; $i < 10; $i++) {
            for ($k = 0; $k < 10; $k++) {
                $data = "{x:{$i}, {y:{$k},state: false, culture: null, platted_at: null, growed_at: null}";
                array_push($grid, $data);
            }
        }
        return $grid;
    }
}

