<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['aut_name'];
    protected $table = "author";
    // public $timestamps = false;

}
