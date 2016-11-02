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

Route::get('/', function () {
    echo "WELCOME TO MY SITE";
});

Route::get('hello/{name}', function($name) {
	echo 'Hello ' . $name;;
});

// Create an item
Route::post('test', function(){
	echo 'POSTED';
});

// Read an item
Route::get('test', function(){
	echo '<form action="test" method="POST">';
	echo '<input type="submit" value="submit">';
	echo '<input type="hidden" name="_token" value= "' . csrf_token() .'">';
	echo '<input type="hidden" name="_method" value="delete">';
	echo '</form>';
});


// Update an item
Route::put('test', function(){
	echo 'PUT';
});

// Delete an item
Route::delete('test', function(){
	echo 'DELETE';
});

Route::get('customer/{id}', function($id){
	$customer = App\Customer::find($id);
	echo 'Hello my name is ' . $customer->name;
});

Route::get('get_customer', function(){

	$customer = App\Customer::where('name', '=', 'Tony')->first();
	echo $customer->name;
});