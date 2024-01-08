<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'text', 'likes'];

    protected $with = ['interests', 'tags'];

    public function interests()
    {
        return $this->belongsToMany('App\Models\Interest')->withTimestamps();
    }

    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }

    public function getLikesAttribute()
    {
        return decrypt($this->attributes['likes']);
    }

    public function setLikesAttribute($value)
    {
        $this->attributes['likes'] = encrypt($value);
    }
}
