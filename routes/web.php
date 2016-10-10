<?php



Route::get('/', function () {
    return view('welcome');
});

// view cat
// Route::get('cats/{cat}', 'CatsController@show');

Auth::routes();



// auth routes
Route::group(['middleware' => 'auth'], function () {
	// all cat routes
    Route::resource('cats', 'CatsController');

});

