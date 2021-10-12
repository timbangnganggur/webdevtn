<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\SkillJob;
use App\Models\Company;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class AyoMakaryoController extends Controller
{
    public function index(Request $request)
    {
        // dropDown Option
        $companies = Company::all();
        $regions = Region::all();  


        // set default variabel search to null
        $search = null;

        // if has key search
        if($request->has("q")){
            $search = $request->get("q");
        }

        // if variabel search is not null
        if($search){
            // show spesific jobs
            $jobs = Job::where('description', 'LIKE', "%".$search."%")
                    ->orWhere('name', 'LIKE', "%".$search."%")
                    ->get();
        }else{
            // show avaiable all job
            $jobs = Job::paginate(5);
        }
        return view('general.ayoMakaryo', compact('jobs', 'search', 'companies', 'regions'));
    }

    public function show($id)
    {
        $job = Job::paginate(3);
        $job = Job::find($id);
        if($job != NULL){
            $skillsJobs = SkillJob::where('jobs_id', $job->id)->get();
            $otherJobs = Job::where([
                                        ['companies_id', '=', $job->companies->id],
                                        ['id', '<>', $job->id]
                                    ])->get();
        }
        return view('general.detailLowongan', compact('job', 'skillsJobs', 'otherJobs'));
    }
}
