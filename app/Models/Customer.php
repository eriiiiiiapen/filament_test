<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'number',
        'last_name',
        'first_name',
        'last_name_kana',
        'first_name_kana',
        'birthday',
        'remarks'
    ];

    protected $casts = [
        'birthday' => 'date',
    ];
}
