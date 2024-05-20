<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use Blashbrook\PAPIForms\App\Http\Requests\PatronRegistrationRequest;
use Blashbrook\PAPIForms\App\Http\Resources\PatronRegistrationResource;
use Blashbrook\PAPIForms\App\Models\PatronRegistration;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class PatronRegistrationController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', PatronRegistration::class);

        return PatronRegistrationResource::collection(PatronRegistration::all());
    }

    public function store(PatronRegistrationRequest $request)
    {
        $this->authorize('create', PatronRegistration::class);

        return new PatronRegistrationResource(PatronRegistration::create($request->validated()));
    }

    public function show(PatronRegistration $patronRegistration)
    {
        $this->authorize('view', $patronRegistration);

        return new PatronRegistrationResource($patronRegistration);
    }

    public function update(PatronRegistrationRequest $request, PatronRegistration $patronRegistration)
    {
        $this->authorize('update', $patronRegistration);

        $patronRegistration->update($request->validated());

        return new PatronRegistrationResource($patronRegistration);
    }

    public function destroy(PatronRegistration $patronRegistration)
    {
        $this->authorize('delete', $patronRegistration);

        $patronRegistration->delete();

        return response()->json();
    }
}
