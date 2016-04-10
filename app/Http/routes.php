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

// Route::get('foo', function () {
//     return view('welcome');
// });
// Route for demo design Front-end
// site: mercedesvietnamstar.vn
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
// Route::get('gioithieu', array('as' => 'home', 'uses' => 'HomeController@gioithieu'));
// Route::get('sanpham', array('as' => 'home', 'uses' => 'HomeController@sanpham'));
// Route::get('chitiet', array('as' => 'home', 'uses' => 'HomeController@chitiet'));
// Route::get('khuyenmai', array('as' => 'home', 'uses' => 'HomeController@khuyenmai'));
// Route::get('tintuc', array('as' => 'home', 'uses' => 'HomeController@tintuc'));
// Route::get('lienhe', array('as' => 'home', 'uses' => 'HomeController@lienhe'));

# Register2
// Route::get('gioithieu', function () {
// 	echo "Hello";
// 	//return view('home.gioithieu');
// });
// Route::get('gioithieu', function () {
//     return view('home.gioithieu');
// });

// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/', 'HomeController@index');
// });

// Route::group(['prefix' => ''], function() {
//     Route::get('gioithieu', 'HomeController@gioithieu');
//  //    Route::get('gioithieu', function () {
// 	//     return 'Hello World';
// 	// });
// });

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController',
	['only' => ['create', 'store', 'destroy']]
);

//Users:
Route::get('signup', 'UsersController@create');
//Auth:

//Route::get('profile', array('before' => 'auth', 'uses' => 'UsersController@show'));
Route::group(['middleware' => 'auth'], function() {

	Route::get('profile', array('uses' => 'UsersController@show'));
});
Route::resource('users', 'UsersController',
	['only' => ['create', 'store']]
);


// Route::resource('session', 'SessionController',
// 	['only' => ['create', 'store', 'destroy']]
// );
// Route::group(['middleware' => 'web'], function () {
//     Route::auth();

//     Route::get('/home', 'HomeController@index');
// });
