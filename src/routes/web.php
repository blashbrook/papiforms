<?php

namespace Blashbrook\PAPIForms;

use Illuminate\Support\Facades\Route;
use Blashbrook\PAPIForms\Http\Livewire\Boo;


Route::get('/register', function ()
    {
        return view('papiforms::register');
    }
);

Route::get('/boo', Boo::class);
Route::group(['middleware' => ['web']], function () {
    Route::get('/patron', function ()
    {
        return view('papiforms::patron');
    }
    );
});



