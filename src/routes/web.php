<?php

namespace Blashbrook\PAPIForms;

use Blashbrook\PAPIForms\App\Http\Livewire\DataTables;
use Blashbrook\PAPIForms\App\Http\Livewire\PatronRegistrationForm;
use Blashbrook\PAPIForms\App\Http\Livewire\SearchDropdown;
use Blashbrook\PAPIForms\App\Http\Livewire\SelectPostalCode;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('papiforms::register');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/patron', function () {
        return view('papiforms::patron');
    });
    Route::get('/multistep', function () {
        return view('papiforms::multistep');
    });
    Route::get('/patronpost', PatronRegistrationForm::class);
    Route::get('/search', SearchDropdown::class);
    Route::get('/registrations', DataTables::class);
    Route::get('/postalcodes', SelectPostalCode::class);
});
