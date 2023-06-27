<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Interface\Auth\AuthInterface;

class AuthController extends Controller
{
    protected AuthInterface $repository;
    public function __construct(AuthInterface $auth)
    {
        return $this->repository = $auth;
    }

    public function admin_login(AdminLoginRequest $request)
    {
        return $this->repository->admin_login($request);
    }

    public function admin_logout()
    {
        return $this->admin_logout();
    }

}
