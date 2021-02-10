<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileTNController extends Controller
{
    public function profile()
    {
        return view('general.profileTN');
    }
}
