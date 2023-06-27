<?php
namespace App\Repository\Auth;
use App\Interface\Auth\AuthInterface;

class AuthRepository implements AuthInterface
{
    public function admin_login($request)
    {

        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function admin_logout()
    {
        auth('api')->logout();
        return response_success([],'logout success');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => auth('api')->user(),
        ]);
    }
}
