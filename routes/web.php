<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new-user', function () {

    $user=new \App\User();
    $user->name="hungnv";
    $user->address="Hoang Mai";
    $user->save();
    return "user created";
});

Route::get("/user-list",function (){
    $users=\App\User::all();
    return json_encode($users);
});

Route::get("/upload","HomeController@index");
Route::post("/upload","HomeController@upload");
