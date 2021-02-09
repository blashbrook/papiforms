<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Blashbrook\PAPIForms\App\Models\DeliveryOption;
use Illuminate\Http\Request;

class DeliveryOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSelection()
    {
        //
        $deliveryOptions = DeliveryOption::where('DeliveryOption', 'Mailing Address')
            ->orWhere('DeliveryOption', 'Email Address')
            ->orWhere('DeliveryOption', 'Phone 1')
            ->orWhere('DeliveryOption', 'TXT Messaging')
            ->get(['DeliveryOptionID', 'DeliveryOption'])->sortBy('DeliveryOption');
        foreach ($deliveryOptions as $deliveryOption)
        {
            switch ($deliveryOption->DeliveryOption) {
                case 'Email Address':
                    $deliveryOption->DeliveryOption = 'Email';
                    break;
                case 'Mailing Address':
                    $deliveryOption->DeliveryOption = 'Mail';
                    break;
                case 'Phone 1':
                    $deliveryOption->DeliveryOption = 'Phone';
                    break;
                case 'TXT Messaging':
                    $deliveryOption->DeliveryOption = 'Text message';
                    break;

            }
        }
        return $deliveryOptions;
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
     * @param \App\Models\DeliveryOption $deliveryOption
     *
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryOption $deliveryOption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\DeliveryOption $deliveryOption
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryOption $deliveryOption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request   $request
     * @param \App\Models\DeliveryOption $deliveryOption
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryOption $deliveryOption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\DeliveryOption $deliveryOption
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryOption $deliveryOption)
    {
        //
    }
}
