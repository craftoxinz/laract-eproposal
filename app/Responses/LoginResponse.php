<?php

namespace App\Responses;

use Illuminate\Http\RedirectResponse;
use Laravel\Fortify\Contracts\LoginResponse as FortifyLoginResponse;
use Symfony\Component\HttpFoundation\Response;

class LoginResponse implements FortifyLoginResponse
{
    public function toResponse($request): RedirectResponse|Response
    {
        $user = $request->user();

        if ($user->hasRole('lecturer')) {
            return redirect()->route('lecturers.dashboard');
        }

        return redirect()->route('students.dashboard');
    }
}
