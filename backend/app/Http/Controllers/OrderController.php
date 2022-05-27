<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return OrderResource::collection(Order::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \App\Http\Resources\OrderResource
     */
    public function show(int $id): OrderResource
    {
        $order = Order::findOrFail($id);
        return new OrderResource($order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreOrderRequest $request
     * @return \App\Http\Resources\OrderResource
     */
    public function store(StoreOrderRequest $request): OrderResource
    {
        return new OrderResource(Order::create($request->validated()));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateOfferRequest $request
     * @param int $id
     * @return void
     */
    public function update(UpdateOfferRequest $request, int $id): void
    {
        $order = Order::findOrFail($id);
        $order->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $order = Order::findOrFail($id);
        $order->delete();
    }
}
