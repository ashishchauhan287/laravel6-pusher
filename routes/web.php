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

/*Route::get('test/{name}',function($name){
	event(new App\Events\MyEvent('Welcome',$name));
	return 'Event has been Sent!';
});*/

Route::get('test',function(){
	$number = rand(0000,9999);
	event(new App\Events\MyEvent('Welcome',$number));
	return 'Event has been Sent! <br/> OTP Code '.$number;
});