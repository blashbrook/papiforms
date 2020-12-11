<?php

namespace Blashbrook\PAPIForms;

use Blashbrook\PAPIForms\Http\Livewire\DataTables;
use Blashbrook\PAPIForms\Http\Livewire\PatronRegistrationForm;
use Blashbrook\PAPIForms\Http\Livewire\SearchDropdown;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('papiforms::register');
});


Route::group(['middleware' => ['web']], function () {
    Route::get('/patron', function () {
        return view('papiforms::patron');
    });
    Route::get('/patronpost', PatronRegistrationForm::class);
    Route::get('/search', SearchDropdown::class);
    Route::get('/registrations', DataTables::class);
});


