<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        return view('layouts/base');
    }

    public function fashion()
    {
        return view('layouts/baseFashion');
    }

    public function beauty()
    {
        return view('layouts/baseBeauty');
    }

    public function lifestyle()
    {
        return view('layouts/baseLifestyle');
    }
    
    public function home()
    {
        return view('layouts/base');
    }
    



}
