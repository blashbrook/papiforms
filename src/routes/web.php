<?php

use Blashbrook\PAPIForms\App\Http\Livewire\AdultRegistrationForm;
use Blashbrook\PAPIForms\App\Http\Livewire\TeenPassRegistrationForm;
use Blashbrook\PAPIForms\App\Mail\DuplicatePatronMailable;
use Blashbrook\PAPIForms\App\Mail\TeenPassConfirmationMailable;
use Illuminate\Support\Facades\Route;

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
    Route::get('/adult', AdultRegistrationForm::class);
    Route::get('/modal', function () {
        return view('papiforms::registration-form-modal')
            ->layout('papiforms::layouts.app');
    });
    Route::get('/patron', function () {
        return view('papiforms::patron');
    });
    Route::get('/teenpassemail', function () {
        return new TeenPassConfirmationMailable([
            'first_name' => 'Brian',
            'Barcode' => '4444444444',
            'EmailAddress' => 'blashbrook@dcplibrary.org',
            'logo' => 'assets/dcpl_logo_banner.png',
            'NameFirst' => 'John',
            'NameMiddle' => 'Queue',
            'NameLast' => 'Public',
            'DeliveryOptionID' => '3',
        ]);
    });
    Route::get('/duplicate', function () {
        return new DuplicatePatronMailable([
            'first_name' => 'Brian',
            'Barcode' => '4444444444',
            'EmailAddress' => 'blashbrook@dcplibrary.org',
            'logo' => 'assets/dcpl_logo_banner.png',
            'NameFirst' => 'John',
            'NameMiddle' => 'Queue',
            'NameLast' => 'Public',
            'DeliveryOptionID' => '3',
        ]);
    });
});
