<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Blashbrook\PAPIForms\App\Models\UdfOption;
use Blashbrook\PAPIForms\App\Models\UdfOptionDef;
use Illuminate\Http\Request;

class UdfOptionController extends Controller
{
    public function createSelection()
    {
        return UdfOption::select('id', 'UDFOptionID', 'OptionDesc')->addSelect(
            ['Order' => function ($query) {
                $query->select('DisplayOrder')
                    ->from('udf_option_defs')
                    ->whereColumn('UDFOptionID', 'udf_options.UDFOptionID');
            }])->orderBy('Order')
            ->where('AttrID', '60')
            ->get();
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
     * @param \App\Models\UdfOption $udfOption
     *
     * @return \Illuminate\Http\Response
     */
    public function show(UdfOption $udfOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\UdfOption $udfOption
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(UdfOption $udfOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UdfOption    $udfOption
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UdfOption $udfOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\UdfOption $udfOption
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(UdfOption $udfOption)
    {
        //
    }
}
