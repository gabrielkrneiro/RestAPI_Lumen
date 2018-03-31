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
        $this->validate($request,[
            'boo_title' => 'required|string|min:3',
            'boo_aut_id' => 'required|integer'
        ]);
    }
}
