<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'birth_date', 'gender', 'hobby1', 'hobby2', 'hobby3', 'nationality'];
}