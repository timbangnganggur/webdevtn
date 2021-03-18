<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClbkController extends Controller
{
    public function index()
    {
        return view('general.clbk');
    }

    public function show($id)
    {
        return view('general.detailClbk');
    }
}
