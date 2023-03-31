<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\LoginRequest;
use App\Services\AuthenticationService;
use Illuminate\Http\Request;
class AdminAuthApiController extends Controller
{
    public function login(LoginRequest $request)
    {
        $service = new AuthenticationService();
        $success = $service->login(
            'admin',
            $request->input('email'),
            $request->input('password')
        );

        return response()->json([
            "success" => $success,
        ]);
    }

    public function logout()
    {
        $service = new AuthenticationService();
        $service->logout('admin');

        return response()->json([
            'success' => true
        ]);
    }
}