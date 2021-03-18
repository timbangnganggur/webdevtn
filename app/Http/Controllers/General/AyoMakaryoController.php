<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\SkillJob;

class AyoMakaryoController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('general.ayoMakaryo', compact('jobs'));
    }

    public function show($id)
    {
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
