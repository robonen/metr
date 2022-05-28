<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    /**
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \App\Http\Resources\UserResource
     */
    public function __invoke(LoginRequest $request): UserResource
    {
        if (!auth()->attempt($request->validated()))
            abort(401);

        $token = auth()->user()->createToken('web')->plainTextToken;

        return (new UserResource(auth()->user()))
            ->additional(['token' => $token]);
    }
}
