<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;

class AuthController extends BaseController
{
    protected $helpers = ['form', 'url', 'html'];
    public function loginForm()
    {
        $data = [
            'pageTitle' => 'Login',
            'validation' => null
        ];

        return view('pages/auth/login');
    }

    public function loginHandler()
    {
        echo 'Login processing .......';
    }
}
