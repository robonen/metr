<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadImageRequest;
use App\Http\Resources\UploadImageResource;
use App\Models\OfferPhoto;
use Illuminate\Support\Facades\Storage;

class UploadImageController extends Controller
{
    /**
     * @param \App\Http\Requests\UploadImageRequest $request
     * @return \App\Http\Resources\UploadImageResource
     */
    public function uploadCatalog(UploadImageRequest $request)
    {
        $image = $request->file('image')->store('public/offers');

        $offer_photo = OfferPhoto::create([
            'file' => $image,
        ]);

        return new UploadImageResource($offer_photo);
    }

    public function deleteCatalog(int $id): void
    {
        $offer_photo = OfferPhoto::findOrFail($id);

        if (Storage::exists($offer_photo->file))
            Storage::delete($offer_photo->file);

        $offer_photo->delete();
    }
}
