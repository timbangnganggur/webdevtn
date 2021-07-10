<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Kirim data semua artikel ke view landing page dengan compact
        
        return view('general.landingpage');
    }
}
 