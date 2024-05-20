<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use Blashbrook\PAPIForms\App\Http\Requests\PostalCodeRequest;
use Blashbrook\PAPIForms\App\Http\Resources\PostalCodeResource;
use Blashbrook\PAPIForms\App\Models\PostalCode;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class PostalCodeController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', PostalCode::class);

        return PostalCodeResource::collection(PostalCode::all());
    }

    public function store(PostalCodeRequest $request)
    {
        $this->authorize('create', PostalCode::class);

        return new PostalCodeResource(PostalCode::create($request->validated()));
    }

    public function show(PostalCode $postalCode)
    {
        $this->authorize('view', $postalCode);

        return new PostalCodeResource($postalCode);
    }

    public function update(PostalCodeRequest $request, PostalCode $postalCode)
    {
        $this->authorize('update', $postalCode);

        $postalCode->update($request->validated());

        return new PostalCodeResource($postalCode);
    }

    public function destroy(PostalCode $postalCode)
    {
        $this->authorize('delete', $postalCode);

        $postalCode->delete();

        return response()->json();
    }
}
