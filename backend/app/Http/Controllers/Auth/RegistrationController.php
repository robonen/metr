<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    /**
     *
     * @param \App\Http\Requests\Auth\RegistrationRequest $request
     * @return \App\Http\Resources\UserResource
     */
    public function __invoke(RegistrationRequest $request): UserResource
    {
        $credentials = $request->validated();
        $credentials['password'] = Hash::make($credentials['password']);

        auth()->login(User::create($credentials));

        $token = auth()->user()->createToken('web')->plainTextToken;

        return (new UserResource(auth()->user()))
            ->additional(['token' => $token]);
    }
}
