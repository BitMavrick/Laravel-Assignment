<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'brand_id', 'color_id'];
    protected $table = 'categories';

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }

    public function color()
    {
        return $this->belongsToMany(color::class);
    }
}