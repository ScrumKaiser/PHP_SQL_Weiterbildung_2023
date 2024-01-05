<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article')->withTimestamps();
    }
}
