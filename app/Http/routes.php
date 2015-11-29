<?php



Route::get('/', function () {
    return view('auth/login');


});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




Route::group(['middleware' => 'auth'], function () {

	Route::get('/home',function()
    {
	return redirect('venta');
    });

    Route:: resource('calendario', 'eventosController');

    Route::resource('inventario', 'productosController');


    Route::resource('ordenescompra', 'ordenescompraController');


     Route::resource('venta', 'ventasController');
     Route::post('inventario/vender','productosController@vender');

});




