<?php
use App\Contact;
use App\Country;
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
    

	// $contact = Contact::all();
	// foreach ($contact as $con) {
	// 	echo $con->country->name;
	// }

	// $country = Country::find(1);
	// return $country->contact->name;
	return view('welcome');



});

Route::get("/test",function(){


	$contact = Contact::all();
	foreach ($contact as $c) {
		echo $c->country;
	}

});


Route::resource('contacts','ContactController');
Route::get('/contacts/edit/{id}',function($id){
	$contact = Contact::find($id);
	return view('contacts.edit',compact('contact'));
});

