<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // init fillable
    protected $fillable = [
        'title',
        'content'
    ];
}