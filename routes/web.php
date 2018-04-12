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

use App\Http\Middleware\Soap\PassportVerify;

Route::get('/', function () {
//    $value = session(PassportVerify::PASSPORT_AUTHENTICATED);
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/soap/login', 'PassportController@login')->name('soap_login');
Route::get('/soap/register', 'PassportController@register')->name('soap_register');
Route::get('/soap/test', 'PassportController@test')->name('soap_test');

// Pay Routes
Route::get('/pay', 'PaymentController@show');
Route::post('/pay', 'PaymentController@pay')->name('pay');

//front-end pages:
Route::get('/home', function()
{
    return View::make('pages.home');
});
Route::get('/profile', function()
{
    return View::make('pages.profile');
});
Route::get('/', function()
{
    return View::make('pages.home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});

//Socialite:
Route::get('login/facebook', 'Auth\FacebookController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\FacebookController@handleProviderCallback');

Route::get('/login2', function () {
    $params = [
        'client_id' => '5acecd095e9f9a19ec064b92',
        'redirect_uri' => 'http://dev.openid.100d.mobi/callback',
        'response_type' => 'code',
        'scope' => ''
    ];

    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'http://dev.openid.com/oauth/authorize', ['query' => $params]);
    $body = $response->getBody();
    $result = json_decode($response->getBody(), true);
    return redirect('/');
});

Route::get('/callback', function (Request $request) {
    $http = new \GuzzleHttp\Client;

    $request->code = 'code';

    $response = $http->post('http://dev.openid.100d.mobi/oauth/token', [
        'form_params' => [
            'grant_type' => 'authorization_code',
            'client_id' => '5ac75076e4609a164b5eff3f',
            'client_secret' => 'oHcovY5lWxZWnyMMgKZJ5ZCabfXfntw1kXrzRkBT',
            'redirect_uri' => 'http://dev.pp.100.mobi',
            'code' => 'pp',
        ],
    ]);

    $body = json_decode((string) $response->getBody(), true);

    $response = $http->get('http://dev.openid.com/api/user', [
        'headers' => [
            'Authorization' => 'Bearer ' . $body['access_token'],
        ],
    ]);

    //var_dump($body['access_token'], json_decode($response->getBody()));

    return json_decode((string) $response->getBody(), true);
});