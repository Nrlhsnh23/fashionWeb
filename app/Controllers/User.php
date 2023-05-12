<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return view('/base/baseHome');
    }

    public function fashion()
    {
        return view('base/baseFashion');
    }

    public function beauty()
    {
        return view('base/baseBeauty');
    }

    public function lifestyle()
    {
        return view('base/baseLifestyle');
    }
    
    public function home()
    {
        return view('base/baseHome');
    }
    



}
