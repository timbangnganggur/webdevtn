<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\Skill;
use App\Models\SkillJob;

class InfoLokerAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all();
        return view('admin.infoLoker.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $skills = Skill::all();
        return view('admin.infoLoker.create', compact('companies', 'skills'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = $request->type;
        switch($type){
            case 1 : $type = 'part_time'; break;
            case 2 : $type = 'full_time'; break;
            case 3 : $type = 'internship'; break;
            case 4 : $type = 'apprentice'; break;
            default : $type = 'internship';
        }
        $job = Job::create(
            [
                'name' => $request->name,
                'salary' => $request->salary,
                'type' => $request->type,
                'description' => $request->description,
                'qualification' => $request->qualification,
                'companies_id' => $request->companies_id
            ]
        );
        
        foreach($request->skills_jobs_id as $skill_job_id){
            SkillJob::create([
                'skills_id' => $skill_job_id,
                'jobs_id' => $job->id
            ]);
        }
        return redirect()->route('admin.info-loker.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $companies = Company::all();
        $skills = Skill::all();
        $job = Job::find($id);
        return view('admin.infoLoker.show', compact('companies','skills', 'job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
