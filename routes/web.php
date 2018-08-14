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

Route::resource('/', 'Dashboard');
Route::resource('/Rooms', 'RoomsController');
// Route::resource('/RoomTypes', 'RoomTypes');

// Route::get('/', 'Dashboard@index');

// Route::get('/Rooms', function () {
//     return view('pages.Rooms');
// });

// Route::get('/manageRooms', function () {
//     return view('dashboard');
// });
