<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthorSearch;
use App\BookSearch;

class AuthorController extends BaseController
{
    function __construct()
    {
        $this->class = new AuthorSearch();
    }

    private static function book()
    {
        return new BookSearch();
    }

    public function validating($request)
    {
        $this->validate($request,[
            'aut_name' => 'required|string|min:3'
        ]);
    }
}
