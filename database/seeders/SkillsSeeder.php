<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'name' => 'Good Understanding'
        ]);
        Skill::create([
            'name' => 'Basic'
        ]);
        Skill::create([
            'name' => 'HTML Master'
        ]);
    }
}
