<?php
namespace App\Interface\Auth;

interface AuthInterface{

    public function admin_login($request);
    public function admin_logout();


}
