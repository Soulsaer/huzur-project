<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizePageSection extends Model
{
    use HasFactory;

    protected $casts = [
        'brjs_section_images' => 'json',
        'mto_section_1__images' => 'json',
        'mto_section_2__images' => 'json',
        'brjs_section_images_alt' => 'json',
        'mto_section_1__images_alt' => 'json',
        'mto_section_2__images_alt' => 'json',
    ];
}
