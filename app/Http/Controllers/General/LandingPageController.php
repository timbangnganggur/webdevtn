<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Article;
use App\Models\Company;
use App\Models\Region;
use App\Models\SkillJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function index()
    {
        // Kirim data semua artikel ke view landing page dengan compact
        $articles = Article::all();
        return view('general.landingpage', compact('articles'));
    }

    public function cari(Request $request)
    {
        // dropDown Option
        $companies = Company::all();
        $regions = Region::all();  


        // set default variabel search to null
        $search = true;

        // if has key search
        if($request->has("q")){
            $search = $request->get("q");
        }

        // if variabel search is not null
        if($search){
            // show spesific jobs
            $jobs = Job::where('name', 'LIKE', "%".$search."%")
                    ->orWhere('description', 'LIKE', "%".$search."%")
                    ->get();
        }else{
            // show avaiable all job
            $jobs = Job::paginate(5);
        }
        return view('general.cari', compact('jobs', 'search', 'companies', 'regions'));
    }

}
 