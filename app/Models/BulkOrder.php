<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BulkOrder extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'mobile', 'order_quantity', 'country', 'material', 'special_details', 'attached_image'];

    // // If 'attached_image' is expected to be a file path, cast it as a string
    // protected $casts = [
    //     'attached_image' => 'string',
    // ];
}

