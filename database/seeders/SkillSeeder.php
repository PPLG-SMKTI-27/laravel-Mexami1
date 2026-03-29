<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'name' => 'Laravel',
            'level' => 85,
        ]);

        Skill::create([
            'name' => 'HTML & CSS',
            'level' => 90,
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'level' => 75,
        ]);
    }
}
