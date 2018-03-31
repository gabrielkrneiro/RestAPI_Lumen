<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['boo_title', 'boo_aut_id'];

    public function relationated()
    {
        return $this->BelongsTo(Author::class,'boo_aut_id');
    }
}
