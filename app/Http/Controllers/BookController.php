<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookSearch;

class BookController extends BaseController
{
    function __construct()
    {
        $this->class = new BookSearch();
    }

    public function validating(Request $request)
    {
        return true;
    }
}
