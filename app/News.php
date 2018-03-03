<?php

namespace Vhom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    protected $guarded = ['id'];
    use SoftDeletes;

    public function author()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
