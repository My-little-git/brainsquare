<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('auth.login');
    }
}
