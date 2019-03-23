<?php

namespace App\Http\Controllers\Api\V1;

use App\Receipt;
use App\Http\Controllers\Controller;
use App\Http\Resources\Receipt as ReceiptResource;
use App\Http\Requests\Admin\StoreReceiptsRequest;
use App\Http\Requests\Admin\UpdateReceiptsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;



class ReceiptsController extends Controller
{
    public function index()
    {
        

        return new ReceiptResource(Receipt::with([])->get());
    }

    public function show($id)
    {
        if (Gate::denies('receipt_view')) {
            return abort(401);
        }

        $receipt = Receipt::with([])->findOrFail($id);

        return new ReceiptResource($receipt);
    }

    public function store(StoreReceiptsRequest $request)
    {
        if (Gate::denies('receipt_create')) {
            return abort(401);
        }

        $receipt = Receipt::create($request->all());
        
        

        return (new ReceiptResource($receipt))
            ->response()
            ->setStatusCode(201);
    }

    public function update(UpdateReceiptsRequest $request, $id)
    {
        if (Gate::denies('receipt_edit')) {
            return abort(401);
        }

        $receipt = Receipt::findOrFail($id);
        $receipt->update($request->all());
        
        
        

        return (new ReceiptResource($receipt))
            ->response()
            ->setStatusCode(202);
    }

    public function destroy($id)
    {
        if (Gate::denies('receipt_delete')) {
            return abort(401);
        }

        $receipt = Receipt::findOrFail($id);
        $receipt->delete();

        return response(null, 204);
    }
}
