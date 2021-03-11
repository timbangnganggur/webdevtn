<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            RegionsSeeder::class,
            CompaniesSeeder::class,
            JobsSeeder::class,
            SkillsSeeder::class,
            SkillsJobsSeeder::class,    
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
