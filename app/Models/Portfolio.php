<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainPortfolio;

class Portfolio extends Model
{
    use HasFactory;

  

    protected $fillable = [

        'main_portfolio_id',
        'project_images'
    ];

}
