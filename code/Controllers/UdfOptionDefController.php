<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use Blashbrook\PAPIForms\App\Http\Requests\UdfOptionDefRequest;
use Blashbrook\PAPIForms\App\Http\Resources\UdfOptionDefResource;
use Blashbrook\PAPIForms\App\Models\UdfOptionDef;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class UdfOptionDefController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', UdfOptionDef::class);

        return UdfOptionDefResource::collection(UdfOptionDef::all());
    }

    public function store(UdfOptionDefRequest $request)
    {
        $this->authorize('create', UdfOptionDef::class);

        return new UdfOptionDefResource(UdfOptionDef::create($request->validated()));
    }

    public function show(UdfOptionDef $udfOptionDef)
    {
        $this->authorize('view', $udfOptionDef);

        return new UdfOptionDefResource($udfOptionDef);
    }

    public function update(UdfOptionDefRequest $request, UdfOptionDef $udfOptionDef)
    {
        $this->authorize('update', $udfOptionDef);

        $udfOptionDef->update($request->validated());

        return new UdfOptionDefResource($udfOptionDef);
    }

    public function destroy(UdfOptionDef $udfOptionDef)
    {
        $this->authorize('delete', $udfOptionDef);

        $udfOptionDef->delete();

        return response()->json();
    }
}
