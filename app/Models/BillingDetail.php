<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'address',
        'city',
        'state',
        'zip',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
