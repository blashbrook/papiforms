<?php

namespace Blashbrook\PAPIForms;

use Blashbrook\PAPIForms\Http\Livewire\Boo;
use Illuminate\Support\Facades\Route;

Route::get('/register', function () {
    return view('papiforms::register');
}
);

Route::get('/boo', Boo::class);
Route::group(['middleware' => ['web']], function () {
    Route::get('/patron', function () {
        return view('papiforms::patron');
    }
    );
});
