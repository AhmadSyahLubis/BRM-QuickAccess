<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name', 'slug', 'category', 'description', 'url', 'icon', 'type', 'is_featured'
    ];
}
