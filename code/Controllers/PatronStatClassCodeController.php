<?php

namespace Blashbrook\PAPIForms\App\Http\Controllers;

use Blashbrook\PAPIForms\App\Http\Requests\PatronStatClassCodeRequest;
use Blashbrook\PAPIForms\App\Http\Resources\PatronStatClassCodeResource;
use Blashbrook\PAPIForms\App\Models\PatronStatClassCode;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Routing\Controller;

class PatronStatClassCodeController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', PatronStatClassCode::class);

        return PatronStatClassCodeResource::collection(PatronStatClassCode::all());
    }

    public function store(PatronStatClassCodeRequest $request)
    {
        $this->authorize('create', PatronStatClassCode::class);

        return new PatronStatClassCodeResource(PatronStatClassCode::create($request->validated()));
    }

    public function show(PatronStatClassCode $patronStatClassCode)
    {
        $this->authorize('view', $patronStatClassCode);

        return new PatronStatClassCodeResource($patronStatClassCode);
    }

    public function update(PatronStatClassCodeRequest $request, PatronStatClassCode $patronStatClassCode)
    {
        $this->authorize('update', $patronStatClassCode);

        $patronStatClassCode->update($request->validated());

        return new PatronStatClassCodeResource($patronStatClassCode);
    }

    public function destroy(PatronStatClassCode $patronStatClassCode)
    {
        $this->authorize('delete', $patronStatClassCode);

        $patronStatClassCode->delete();

        return response()->json();
    }
}
