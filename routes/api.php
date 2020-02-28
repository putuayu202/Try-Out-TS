<?php
use Illuminate\Http\Request;
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function($api){
    $api->post('/login' , 'App\Http\Controllers\AuthController@login');
    $api->post('/register' , 'App\Http\Controllers\AuthController@register');
    $api->get('/user', function(){
        return Auth::user();
    });
    $api->post('/logout' , 'App\Http\Controllers\AuthController@logout');

    $api->post('/createtoken', 'App\Http\Controllers\TokenController@createtoken');
    $api->get('/token/{token}', 'App\Http\Controllers\TokenController@token');

    $api->post('/createsoal', 'App\Http\Controllers\SoalController@createsoal');
    $api->get('/soal/{category}', 'App\Http\Controllers\SoalController@soal');
});