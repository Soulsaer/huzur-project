<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessPageSection extends Model
{
    use HasFactory;

    protected $casts = [
        'wjr_section_images' => 'json',
        'brjs_section_images' => 'json',
    ];
}
