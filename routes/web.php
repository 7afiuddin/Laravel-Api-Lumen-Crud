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

$router->get('/','MyController@Name' );
$router->get('/first','MyController@first' );
$router->get('/second','MyController@second' );
$router->get('/download','MyController@download' );
