<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Article;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Kirim data semua artikel ke view landing page dengan compact
<<<<<<< HEAD
        $article = Article::all();
        return view('general.landingpage', compact('article'));    }
=======
        
        return view('general.landingpage');
    }
>>>>>>> 3ac6e8155dcc14e99604df8d8e9d4846178058da
}
 