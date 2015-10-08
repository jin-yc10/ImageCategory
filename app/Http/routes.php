<?php
use Illuminate\Http\Request;
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
    print_r("Hello!");
    $debug_var = ["1","2",["3"]];
    var_dump($debug_var);
    DebugBar::info($debug_var);
    DebugBar::error('Error!');
    DebugBar::warning('Watch out…');
    DebugBar::addMessage('Another message', 'mylabel');
    return view('app.index');
});

Route::group(['middleware' => ['auth', 'guest']], function () {
    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});

Route::get('/dashboard', function (Request $request) {
    if(Auth::user()) {
        return view('app.dashboard')->with('title', 'Dashboard');
    } else {
        return redirect("auth/login");
    }
});

Route::group(['prefix' => 'auth'], function() {
// Authentication routes...
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');
});

Route::get('/test', function (Request $request) {
    return view('app.test')->with('title', 'Test');
});


