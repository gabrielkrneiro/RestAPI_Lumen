<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AuthorSearch;
use App\BookSearch;

abstract class BaseController extends Controller
{
    protected $class;

    abstract function validating(Request $request);

    /*
        show all the objects
    */
    public function showAll()
    {
        $response = $this->class::all();
        if($response)
        {
            return response()->json($response);
        }
        else
        {
            return response()->json(['error' => 'empty list'], 404);
        }
    }


    /*
        return the object that correspond to the id passed
    */
    public function showOne($id)
    {
        $response = $this->class::find($id);
        if ($response)
        {
            return response()->json($response);
        }
        else
        {
            return response()->json(['error' => 'model does not exist'], 404);
        }
    }


    /*
        create new object 
    */
    public function create(Request $request)
    {
        $this->validating($request);
        $response = $this->class::create($request->all());
        if($response)
        {
            return response()->json($response, 201);            
        }
        else
        {
            return response()->json(['error' => 'model could not be created'], 404);
        }
    }

    /*
        delete a object
    */
    public function delete($id)
    {
        $response = $this->class::findOrFail($id)->delete();
        if($response)
        {
            return response('{"response":"true"}', 200);
        }
        else
        {
            return response()->json(['error' => 'model could not be deleted',404]);
        }
    }


    /*
        update a object
    */
    public function update($id, Request $request)
    {
        $model = $this->class::findOrFail($id);
        $response = $model->update($request->all());
        if($response)
        {
            return response()->json($model, 200);
        }
        else
        {
            return response()->json(['error' => 'model could not be updated',404]);
        }
    }


    /*
        show the objects relationated with this one that corresponding to the id passed through the params
    */
    public function showRelationated($id)
    {
        $response = $this->class::find($id)->relationated;
        if($response)
        {
            return response()->json($response,200);
        }
        else
        {
            return response()->json(['error' => 'there is no model relationated with this one'],404);
        }
    }
    

}
