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

/*Route::get('/', function () {
    
    //return view('welcome');
    //return view('DemoView');
    //return 'user';
    
    $data=[
        '0'=>[
            'Name'=>'shn',
            'city'=> 'DHK',
            'Contry'=> 'BD',

        ],
        '1'=>[
            'Name'=>'shn1',
            'city'=> 'DHK1',
            'Contry'=> 'BD1',
        ],

    ];
    return $data;

});*/

Route::get('/', 'WelcomeController@index');
Route::get('/Categories', 'WelcomeController@index');

// Route::get('/', 'WelcomeController@Categories');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
