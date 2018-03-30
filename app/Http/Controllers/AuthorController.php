<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthorSearch;

class AuthorController extends Controller
{
    public function showAllAuthors()
    {
       return response()->json(AuthorSearch::all());
    }

    public function showOneAuthor($id)
    {
       return response()->json(AuthorSearch::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'aut_name' => 'required|string|min:3'
        ]);

        $author = AuthorSearch::create($request->all());
        return response()->json($author, 201);
    }

    public function delete($id)
    {
        $response = AuthorSearch::findOrFail($id)->delete();
        if($response)
        {
            return response('{"response":"true"}', 200);
        }
        else
        {
            return response('{"response":"false"}',400);
        }
    }

    public function update($id, Request $request)
    {
        $author = AuthorSearch::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }
}
