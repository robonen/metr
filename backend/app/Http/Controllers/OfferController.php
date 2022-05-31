<?php

namespace App\Http\Controllers;

use App\Filters\OfferFilter;
use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;
use App\Models\OfferPhoto;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \App\Filters\OfferFilter $filters
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(OfferFilter $filters): AnonymousResourceCollection
    {
        return OfferResource::collection(
            Offer::filter($filters)
                ->latest()
                ->with('images')
                ->get()
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \App\Http\Resources\OfferResource
     */
    public function show(int $id): OfferResource
    {
        return new OfferResource(Offer::with('images')->findOrFail($id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreOfferRequest $request
     * @return \App\Http\Resources\OfferResource
     */
    public function store(StoreOfferRequest $request): OfferResource
    {
        $data = $request->validated();
        $images = $data['images'];

        $offer = auth()->user()->offers()->create($data);

        foreach ($images as $image)
        {
            $offer_photo = OfferPhoto::findOrFail($image['id']);
            $offer_photo->offer_id = $offer->id;
            $offer_photo->save();
        }

        return new OfferResource($offer);
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
        $offer = Offer::findOrFail($id);
        $offer->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $offer = Offer::findOrFail($id);
        $offer->delete();
    }

    public function allByUser(): AnonymousResourceCollection
    {
        return OfferResource::collection(
            auth()
            ->user()
            ->offers()
            ->latest()
            ->with('images')
            ->get()
        );
    }
}
