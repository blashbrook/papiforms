<?php

use Illuminate\Support\Facades\Route;
use Blashbrook\PAPIForms\App\Http\Livewire\TeenPassRegistrationForm;


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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web']], function () {
    Route::get('/teenpass', TeenPassRegistrationForm::class);
    Route::get('/patron', function () {
        return view('papiforms::patron');
    });
});

