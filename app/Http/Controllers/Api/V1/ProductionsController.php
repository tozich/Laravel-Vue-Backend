<?php

namespace App\Http\Controllers\Api\V1;

use App\Production;
use App\Http\Controllers\Controller;
use App\Http\Resources\Production as ProductionResource;
use App\Http\Requests\Admin\StoreProductionsRequest;
use App\Http\Requests\Admin\UpdateProductionsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class ProductionsController extends Controller
{
    public function index()
    {
        

        return new ProductionResource(Production::with([])->get());
    }

    public function show($id)
    {
        if (Gate::denies('production_view')) {
            return abort(401);
        }

        $production = Production::with([])->findOrFail($id);

        return new ProductionResource($production);
    }

    public function store(StoreProductionsRequest $request)
    {
        if (Gate::denies('production_create')) {
            return abort(401);
        }

        $production = Production::create($request->all());
        
        

        return (new ProductionResource($production))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateProductionsRequest $request, $id)
    {
        if (Gate::denies('production_edit')) {
            return abort(401);
        }

        $production = Production::findOrFail($id);
        $production->update($request->all());
        
        
        

        return (new ProductionResource($production))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('production_delete')) {
            return abort(401);
        }

        $production = Production::findOrFail($id);
        $production->delete();

        return response(null, 204);
    }
}
