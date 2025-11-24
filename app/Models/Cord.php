<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cord extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'color', 'color_hex', 'order', 'is_child',
    ];
}