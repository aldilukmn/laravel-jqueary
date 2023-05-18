<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jquery extends Model
{
    use SoftDeletes;
    protected $table = 'laravel_jquery';
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'password'
    ];
}
