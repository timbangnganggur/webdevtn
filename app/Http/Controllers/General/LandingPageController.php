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


        $article = Article::all();
        return view('general.landingpage', compact('article'));

        $articles = Article::all();
        return view('general.landingpage', compact('articles'));

    }

}
 