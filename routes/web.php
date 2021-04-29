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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix'=>'api'],function() use ($router){

    $router->get('/medicationPlanController/{id}',['uses'=>'MedicationPlanController@index']);
    $router->get('/users',['uses'=>'UserController@index']);
    $router->get('/users/{id}',['uses'=>'UserController@show']);
    $router->get('/medicationPlan/{user}',['uses'=>'MedicationPlanController@show']);

   /* $router->post('/user/login',['uses'=>'UserController@login']);
    $router->get('user/show/{user}',['uses'=>'UserController@show']);

    $router->get('/drug/{id}',['uses'=>'DrugController@index']);
    $router->get('drug/show/{id}',['uses'=>'DrugController@show']);*/
});


