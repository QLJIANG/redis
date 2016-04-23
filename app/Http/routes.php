<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use \Illuminate\Support\Facades\Redis;
use App\Events\ANewMessage;

Route::get('/', function () {
//    return view('welcome');
//    Redis::set('name', 'qljiang');
//    $name = Redis::get('name');
//    return $name;

//    $data = [
//        'event' => 'ANewMessage',
//        'data' => [
//            'name' => 'qljiang',
//            'sex' => 'female',
//        ],
//    ];
//
//    Redis::publish('test-channel', json_encode($data));

    event(new ANewMessage(Request::query('name')));

    return view('welcome');
});
