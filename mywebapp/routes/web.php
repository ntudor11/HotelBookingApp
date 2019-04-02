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

Route::get('/', 'ContentsController@home')->name('home');

Route::get('/clients', 'ClientController@index')->name('clients');

Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
Route::post('/clients/new', 'ClientController@create')->name('create_client');

Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');


Route::get('/reservations', 'ReservationsController@bookRoom');
Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom');

// Route::get('/test', function() {
//    return view('test',["name"=>"Tudor Nastasa"]);
// });

Route::get('/about', function() {
  // return '<h2>About</h2>';
  $response_arr = [];
  $response_arr['author'] = 'TN';
  $response_arr['version'] = '0.1';
  return $response_arr;
});

Route::get('/test2', function() {
   return view('test2');
});

Route::get('/di', 'ClientController@di');

Route::get('/facades/db', function() {
  return DB::select('SELECT * FROM table');
});

Route::get('/facades/encrypt', function() {
  return Crypt::encrypt('123456789');
});

Route::get('/facades/decrypt', function() {
  return Crypt::decrypt('eyJpdiI6Ikk1Um9kTDlIUmRWWkdTbzhLWTR0enc9PSIsInZhbHVlIjoibkdBSDVCUU9ZbUJrU3ZJdXE5dGVnMEVEXC9xV0hcL1VETllpQU1JQnhcL256Yz0iLCJtYWMiOiIzY2I2MDBmMmE5ODM1MTMxMzkxNzQ5YjQzODUzMGM1OGE5MGFjZTk4YTNlYTI1MTdmZTg3NzdhNmQ0ZGFmMjEyIn0=');
});
