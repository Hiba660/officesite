<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetAQuote extends Model
{
    use HasFactory;

    protected $table = 'get_a_quotes';

    protected $fillable = [

        'days',
        'time',
        'phone',
        'email',
        'address'
    ];
}
