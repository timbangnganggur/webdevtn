<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Job;


class DashboardAdminController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $jobs = Job::all();
        return view('admin.dashboard', compact('articles', 'jobs'));
    }
}
