<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;

class ManagerAuthController extends Controller
{
    public function loginShow()
    {
        return view('auth.manager_login');
    }

    public function login(LoginRequest $request)
    {
        $service = new AuthenticationService();
        $success = $service->login(
            'manager',  //   guard:
            $request->input('email'),  //key:
            $request->input('password')
        );

        return $success ?
            redirect()->route('showths.index') :
            redirect()->back()->withErrors([
                'email' => 'Credentials not found',
            ]);
    }

    public function logout()
    {
        $service = new AuthenticationService();
        $service->logout('manager');

        return redirect()->route('manager.login.show');
    }
}
