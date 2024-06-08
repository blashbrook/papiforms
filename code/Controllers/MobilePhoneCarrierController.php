<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use Blashbrook\PAPIForms\App\Http\Requests\MobilePhoneCarrierRequest;
use Blashbrook\PAPIForms\App\Http\Resources\MobilePhoneCarrierResource;
use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class MobilePhoneCarrierController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', MobilePhoneCarrier::class);

        return MobilePhoneCarrierResource::collection(MobilePhoneCarrier::all());
    }

    public function store(MobilePhoneCarrierRequest $request)
    {
        $this->authorize('create', MobilePhoneCarrier::class);

        return new MobilePhoneCarrierResource(MobilePhoneCarrier::create($request->validated()));
    }

    public function show(MobilePhoneCarrier $mobilePhoneCarrier)
    {
        $this->authorize('view', $mobilePhoneCarrier);

        return new MobilePhoneCarrierResource($mobilePhoneCarrier);
    }

    public function update(MobilePhoneCarrierRequest $request, MobilePhoneCarrier $mobilePhoneCarrier)
    {
        $this->authorize('update', $mobilePhoneCarrier);

        $mobilePhoneCarrier->update($request->validated());

        return new MobilePhoneCarrierResource($mobilePhoneCarrier);
    }

    public function destroy(MobilePhoneCarrier $mobilePhoneCarrier)
    {
        $this->authorize('delete', $mobilePhoneCarrier);

        $mobilePhoneCarrier->delete();

        return response()->json();
    }
}
