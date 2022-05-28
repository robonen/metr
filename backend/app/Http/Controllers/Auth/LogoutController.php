<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /**
     *
     * @return void
     */
    public function __invoke(): void
    {
        auth()->user()->currentAccessToken()->delete();
    }
}
