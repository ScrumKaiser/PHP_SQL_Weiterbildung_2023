<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'article_id'];

    public function articles()
    {
        return $this->belongsToMany('App\Models\Article');
    }

    public function getTitleAttribute()
    {
        return ucfirst($this->attributes['title']);
    }
}
