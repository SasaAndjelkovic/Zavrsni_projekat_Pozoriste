<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\LoginRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function loginShow()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $service = new AuthenticationService();
        $success = $service->login(
            'web',
            $request->input('email'),
            $request->input('password')
        );

        return $success ?
            redirect()->route('articles.index') :
            redirect()->back()->withErrors([
                'email' => 'Credentials not found',
            ]);
    }

    public function logout()
    {
        $service = new AuthenticationService();
        $service->logout('web');

        return redirect()->route('user.login.show');
    }
}