<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Midblog extends Model
{
    use HasFactory;

    protected $fillable =[
        'midblog_image',
        'banner_heading',
        'slug',
        'author',
        'date',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'other_meta',
        'description',
        'status'
    ];
}
