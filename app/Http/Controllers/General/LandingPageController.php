<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('general.landingpage');
    }
    public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $Jobs = Job::query()
        ->where('id', 'LIKE', "%{$search}%")
        ->orWhere('name', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the resluts compacted
    return view('general.search', compact('Jobs'));
    }
}
 