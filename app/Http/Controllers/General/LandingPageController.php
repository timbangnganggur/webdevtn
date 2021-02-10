<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('general.landingpage');
    }

    public function profileTN()
    {
        return view('general.profileTN');
    }
}
