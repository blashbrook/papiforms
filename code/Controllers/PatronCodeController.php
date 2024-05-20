<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use Blashbrook\PAPIForms\App\Http\Requests\PatronCodeRequest;
use Blashbrook\PAPIForms\App\Http\Resources\PatronCodeResource;
use Blashbrook\PAPIForms\App\Models\PatronCode;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class PatronCodeController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', PatronCode::class);

        return PatronCodeResource::collection(PatronCode::all());
    }

    public function store(PatronCodeRequest $request)
    {
        $this->authorize('create', PatronCode::class);

        return new PatronCodeResource(PatronCode::create($request->validated()));
    }

    public function show(PatronCode $patronCode)
    {
        $this->authorize('view', $patronCode);

        return new PatronCodeResource($patronCode);
    }

    public function update(PatronCodeRequest $request, PatronCode $patronCode)
    {
        $this->authorize('update', $patronCode);

        $patronCode->update($request->validated());

        return new PatronCodeResource($patronCode);
    }

    public function destroy(PatronCode $patronCode)
    {
        $this->authorize('delete', $patronCode);

        $patronCode->delete();

        return response()->json();
    }
}
