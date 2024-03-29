<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Blashbrook\PAPIForms\App\Models\PatronCode;
use Illuminate\Http\Request;

class PatronCodeController extends Controller
{
    public function getPatronCode($patronCodeDescription)
    {
        $patronCodeArray = PatronCode::select('PatronCodeID')
            ->where('Description', $patronCodeDescription)
            ->pluck('PatronCodeID');

        return $patronCodeArray[0];
    }

    public function getSelection($patronCodeID)
    {
        $selected = PatronCode::get()->where('PatronCodeID', $patronCodeID)->flatten();

        return $selected[0]['Description'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\PatronCode  $patronCode
     * @return \Illuminate\Http\Response
     */
    public function show(PatronCode $patronCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatronCode  $patronCode
     * @return \Illuminate\Http\Response
     */
    public function edit(PatronCode $patronCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PatronCode  $patronCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PatronCode $patronCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatronCode  $patronCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatronCode $patronCode)
    {
        //
    }
}
