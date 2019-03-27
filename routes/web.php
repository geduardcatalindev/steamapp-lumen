<?php

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

use Illuminate\Http\Response;
$router->get('/data', function () {
    $data = json_encode([
        'a' => 'b'
    ]);
    return (new Response($data, 200))->header('Access-Control-Allow-Origin', '*');
});
