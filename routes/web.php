<?php
use App\Router;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use App\Book;


$router->group(['prefix' => 'api', /*'middleware' => 'auth'*/], function($router){
    $router
        /*
            Author
        */
        ->get('author/','AuthorController@showAll')
        ->get('author/{id}','AuthorController@showOne')
        ->get('author/{id}/book','AuthorController@showRelationated')
        ->post('author/','AuthorController@create')
        ->delete('author/{id}','AuthorController@delete')
        ->put('author/{id}','AuthorController@update')

        /*
            Book
        */
        ->get('book/','BookController@showAll')
        ->get('book/{id}','BookController@showOne')
        ->get('book/{id}/author','BookController@showRelationated')
        ->post('book/','BookController@create')
        ->delete('book/{id}','BookController@delete')
        ->put('book/{id}','BookController@update');



});