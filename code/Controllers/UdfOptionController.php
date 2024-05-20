<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use Blashbrook\PAPIForms\App\Http\Requests\UdfOptionRequest;
use Blashbrook\PAPIForms\App\Http\Resources\UdfOptionResource;
use Blashbrook\PAPIForms\App\Models\UdfOption;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class UdfOptionController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', UdfOption::class);

        return UdfOptionResource::collection(UdfOption::all());
    }

    public function store(UdfOptionRequest $request)
    {
        $this->authorize('create', UdfOption::class);

        return new UdfOptionResource(UdfOption::create($request->validated()));
    }

    public function show(UdfOption $udfOption)
    {
        $this->authorize('view', $udfOption);

        return new UdfOptionResource($udfOption);
    }

    public function update(UdfOptionRequest $request, UdfOption $udfOption)
    {
        $this->authorize('update', $udfOption);

        $udfOption->update($request->validated());

        return new UdfOptionResource($udfOption);
    }

    public function destroy(UdfOption $udfOption)
    {
        $this->authorize('delete', $udfOption);

        $udfOption->delete();

        return response()->json();
    }
}
