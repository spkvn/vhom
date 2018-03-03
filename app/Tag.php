<?php

namespace Vhom;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = ['id'];
    public function projects()
    {
        return $this->morphedByMany(Project::class, 'taggable');
    }
    public function news()
    {
        return $this->morphedByMany(News::class, 'taggable');
    }
}
