<?php
    
    namespace Blashbrook\PAPIForms\App\Http\Controllers;
    
    use Blashbrook\PAPIForms\App\Http\Requests\DeliveryOptionRequest;
    use Blashbrook\PAPIForms\App\Http\Resources\DeliveryOptionResource;
    use Blashbrook\PapiformsReact\Facades\DeliveryOption;
    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Routing\Controller;
    
    class DeliveryOptionController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', DeliveryOption::class);

        return DeliveryOptionResource::collection(DeliveryOption::all());
    }

    public function store(DeliveryOptionRequest $request)
    {
        $this->authorize('create', DeliveryOption::class);

        return new DeliveryOptionResource(DeliveryOption::create($request->validated()));
    }

    public function show(DeliveryOption $deliveryOption)
    {
        $this->authorize('view', $deliveryOption);

        return new DeliveryOptionResource($deliveryOption);
    }

    public function update(DeliveryOptionRequest $request, DeliveryOption $deliveryOption)
    {
        $this->authorize('update', $deliveryOption);

        $deliveryOption->update($request->validated());

        return new DeliveryOptionResource($deliveryOption);
    }

    public function destroy(DeliveryOption $deliveryOption)
    {
        $this->authorize('delete', $deliveryOption);

        $deliveryOption->delete();

        return response()->json();
    }
}
