<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Blashbrook\PAPIForms\App\Models\PostalCode;
use Illuminate\Http\Request;

class PostalCodeController extends Controller
{
    public function createSelection()
    {
        return PostalCode::all()->sortBy('PostalCode');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostalCode  $postalCode
     * @return \Illuminate\Http\Response
     */
    public function show(PostalCode $postalCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostalCode  $postalCode
     * @return \Illuminate\Http\Response
     */
    public function edit(PostalCode $postalCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostalCode  $postalCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostalCode $postalCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  PostalCode  $postalCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostalCode $postalCode)
    {
        //
    }
}
