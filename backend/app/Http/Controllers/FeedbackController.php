<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Http\Requests\UpdateFeedbackRequest;
use App\Http\Resources\FeedbackResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return FeedbackResource::collection(auth()->user()->feedback()->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \App\Http\Resources\FeedbackResource
     */
    public function show(int $id): FeedbackResource
    {
        $feedback = auth()->user()->feedback()->findOrFail($id);
        return new FeedbackResource($feedback);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreFeedbackRequest $request
     * @return \App\Http\Resources\FeedbackResource
     */
    public function store(StoreFeedbackRequest $request): FeedbackResource
    {
        $feedback = auth()->user()->feedback()->create($request->validated());
        return new FeedbackResource($feedback);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateFeedbackRequest $request
     * @param int $id
     * @return void
     */
    public function update(UpdateFeedbackRequest $request, int $id): void
    {
        $feedback = auth()->user()->feedback()->findOrFail($id);
        $feedback->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        auth()->user()->feedback()->findOrFail($id)->delete();
    }
}
