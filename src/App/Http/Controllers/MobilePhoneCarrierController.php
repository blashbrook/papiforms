<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Illuminate\Http\Request;

class MobilePhoneCarrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MobilePhoneCarrier::all();
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\MobilePhoneCarrier $mobilePhoneCarrier
     *
     * @return \Illuminate\Http\Response
     */
    public function show(MobilePhoneCarrier $mobilePhoneCarrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\MobilePhoneCarrier $mobilePhoneCarrier
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(MobilePhoneCarrier $mobilePhoneCarrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request       $request
     * @param \App\Models\MobilePhoneCarrier $mobilePhoneCarrier
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobilePhoneCarrier $mobilePhoneCarrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\MobilePhoneCarrier $mobilePhoneCarrier
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobilePhoneCarrier $mobilePhoneCarrier)
    {
        //
    }
}
