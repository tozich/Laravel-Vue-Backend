<?php

namespace App\Http\Controllers\Api\V1;

use App\Development;
use App\Http\Controllers\Controller;
use App\Http\Resources\Development as DevelopmentResource;
use App\Http\Requests\Admin\StoreDevelopmentsRequest;
use App\Http\Requests\Admin\UpdateDevelopmentsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class DevelopmentsController extends Controller
{
    public function index()
    {
        

        return new DevelopmentResource(Development::with([])->get());
    }

    public function show($id)
    {
        if (Gate::denies('development_view')) {
            return abort(401);
        }

        $development = Development::with([])->findOrFail($id);

        return new DevelopmentResource($development);
    }

    public function store(StoreDevelopmentsRequest $request)
    {
        if (Gate::denies('development_create')) {
            return abort(401);
        }

        $development = Development::create($request->all());
        
        

        return (new DevelopmentResource($development))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateDevelopmentsRequest $request, $id)
    {
        if (Gate::denies('development_edit')) {
            return abort(401);
        }

        $development = Development::findOrFail($id);
        $development->update($request->all());
        
        
        

        return (new DevelopmentResource($development))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('development_delete')) {
            return abort(401);
        }

        $development = Development::findOrFail($id);
        $development->delete();

        return response(null, 204);
    }
}
