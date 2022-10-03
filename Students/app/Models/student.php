<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'birth_date', 'gender', 'hobby1', 'hobby2', 'hobby3', 'nationality'];
}