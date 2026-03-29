<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Valorant',
            'description' => 'Ex Ascendant 2',
            'image' => 'portofolio.png',
            'link' => 'https://example.com',
        ]);

        Project::create([
            'name' => 'Marvel Rivals',
            'description' => 'Ex One Above All',
            'image' => 'kasir.png',
            'link' => 'https://example.com',
        ]);
    }
}
