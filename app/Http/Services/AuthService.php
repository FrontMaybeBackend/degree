<?php

namespace App\Http\Services;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthService
{

    public function authenticate(LoginRequest $request): bool
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return true;
        }else{
            return false;
        }

    }

}
