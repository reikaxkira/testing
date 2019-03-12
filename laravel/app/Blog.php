<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    // protected $table = "blogs";
    protected $fillable = [
        'id','slugs','title','description',
    ];
}
