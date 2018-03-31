<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Author extends Model
{
    protected $fillable = ['aut_name'];
    protected $table = "author";
    // public $timestamps = false;

    public function relationated()
    {
        return $this->hasMany(Book::class,'boo_aut_id');
    }
}
