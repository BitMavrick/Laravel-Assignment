<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;

    protected $fillable = ['color_name', 'color_code'];

    // Setting up relationship
    public function category()
    {
        return $this->hasMany(category::class);
    }
}