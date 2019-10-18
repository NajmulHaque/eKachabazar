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
    return view('welcome');
});*/

Route::get('/','pageController@index');
Route::get('/services','pageController@services');
//image Upload to Public folder
Route::post('fileUpload',[
    'as'=>'image.add',
    'uses'=>'pageController@fileUpload'
]);
// Route::post('videoUpload',[
//     'as'=>'video.add',
//     'uses'=>'pageController@videoUpload'
// ]);

Route::resource('sell_items','SellItemController');
