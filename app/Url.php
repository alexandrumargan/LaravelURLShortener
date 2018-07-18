<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $guarded = []; //list of items that we don't want to pass through, but it's empty, because we want everything to pass through
}
