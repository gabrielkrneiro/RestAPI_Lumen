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

/*
header to access {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6Ik5qVXpNek5HUWpFeE1rRkJNa1UyUVRoRE16STNORVpFUmtZMk1qbEJOakZHTmpRd05qWkJOZyJ9.eyJpc3MiOiJodHRwczovL2dhYnVjYXJuZWlyby5hdXRoMC5jb20vIiwic3ViIjoieUtSMXo5MDVQSlg3c2ZFWmROaFdOZzRDd0RRMmZLMGJAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vZ2FidWNhcm5laXJvLyIsImlhdCI6MTUyMjQ1NjM3NywiZXhwIjoxNTIyNTQyNzc3LCJhenAiOiJ5S1IxejkwNVBKWDdzZkVaZE5oV05nNEN3RFEyZkswYiIsImd0eSI6ImNsaWVudC1jcmVkZW50aWFscyJ9.WaY-xChyMZM9ulHelLOsp3efXdkpkjZ0QT76_evMxdat2PW8Hj7D6tKaWi-YAYNsBswMlpu-7DzfPIV43LRBr_QPuNjN_CsCDuveiQQ8ruTrYaOb04wgRho2xOgFpTATrQWDRpR7RsY2YH6zGRyKypMdiRGw76OIdNy-1Tw7TNSO88pIyFoZOFrhACpS5SFpxxWK0RBJQ5pOpBidLiCOEg1AUpGXhi3yv3Oetu-x8IMN-Vy6MbCzkT5FTiI4SIo6uu8bHW9c8vIN2lzrW9MZqHHU1JsHObaQ8q9Q5LTcyBxB6wyn8QXR5h0cjCbgrn9R-gHzyuf5mYC2Qx-oRbEZ-g"
}
*/

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function($router){
    $router
        ->get('author/','AuthorController@showAllAuthors')
        ->get('author/{id}','AuthorController@showOneAuthor')
        ->post('author/','AuthorController@create')
        ->delete('author/{id}','AuthorController@delete')
        ->put('author/{id}','AuthorController@update');
});