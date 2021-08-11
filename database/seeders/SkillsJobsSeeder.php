<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SkillJob;

class SkillsJobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SkillJob::create([
            'skills_id' => '1',
            'jobs_id' => '1'
        ]);
    }
}
