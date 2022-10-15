<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    // Tips:
    // To create model, run: php artisan make:model brand

    use HasFactory;

    protected $fillable = ['brand_name'];
}