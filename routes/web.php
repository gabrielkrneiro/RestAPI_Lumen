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

//$router->get('/author',"AuthorController@index");
$router->group(['prefix' => 'api'], function($router){
    $router
        ->get('author/','AuthorController@showAllAuthors')
        ->get('author/{id}','AuthorController@showOneAuthor')
        ->post('author/','AuthorController@create')
        ->delete('author/{id}','AuthorController@delete')
        ->put('author/{id}','AuthorController@update');
});