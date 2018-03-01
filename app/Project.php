<?php

namespace Vhom;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $guarded = ['id'];
    use SoftDeletes;
}
