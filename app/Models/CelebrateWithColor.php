<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CelebrateWithColor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'status', 'alt', 'title', 'discription', 'banner', 'banner_f', 'banner_2', 'banner_3',
    ];
}
