<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = 'postID';
    protected $fillable = ['title', 'body'];
}
