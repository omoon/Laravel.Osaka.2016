<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('messages', function () {
    $messages = \App\Message::get();
    return view('messages', ['messages' => $messages]);
})->name('messages');

Route::post('say_something', function() {
    // save to database

    $message = new \App\Message();
    $message->message = \Illuminate\Support\Facades\Input::get('message');
    $message->save();


    return Redirect::to('messages');

});
