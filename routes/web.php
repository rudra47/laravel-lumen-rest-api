<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/get-header', 'TestController@getHeader');
$router->get('/download', 'TestController@download');
$router->get('/check-db', 'TestController@checkDB');

//EMPLOYEE CRUD
$router->get('/employee-list', 'EmployeeController@listData');
$router->post('/employee-create', 'EmployeeController@create');
$router->delete('/employee-delete', 'EmployeeController@delete');
$router->put('/employee-update', 'EmployeeController@update');