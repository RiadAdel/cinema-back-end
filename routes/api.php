<?php

use App\Http\Controllers\moviesController;
use Illuminate\Http\Request;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('movies', 'moviesController@index');
Route::get('genres', 'genresController@index');
Route::get('halls', 'hallsController@index');
Route::get('screening', 'moviesController@screening');
Route::get('tickets', 'ticketsController@screeningTickets');
Route::post('add-ticket', 'ticketsController@store');
Route::post('add-screening', 'moviesController@addScreening');
Route::post('add-movie', 'moviesController@store');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function () {
    Route::post('details', 'UserController@details');
});
