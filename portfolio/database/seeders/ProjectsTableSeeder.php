<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $projects = [
            [
                'title' => 'Laravel Portfolio',
                'client' => 'Boolean',
                'period' => 'luglio 2025',
                'content' => 'https://github.com/BassaniDavid/laravel-portfolio',
            ],
            [
                'title' => 'Laravel Comics',
                'client' => 'Boolean',
                'period' => 'luglio 2025',
                'content' => 'https://github.com/BassaniDavid/laravel-comics/tree/main/laravel-comics',
            ],
            [
                'title' => 'Tabellone Treni',
                'client' => 'Boolean',
                'period' => 'luglio 2025',
                'content' => 'https://github.com/BassaniDavid/laravel-migration-seeder',
            ],
            [
                'title' => 'Movies',
                'client' => 'Boolean',
                'period' => 'luglio 2025',
                'content' => 'https://github.com/BassaniDavid/laravel-model-controller',
            ],
        ];

        foreach ($projects as $project) {
            $newProject = new Project();

            $newProject->title = $project['title'];
            $newProject->client = $project['client'];
            $newProject->period = $project['period'];
            $newProject->content = $project['content'];

            $newProject->save();
        }


        // for($i = 0; $i < 10; $i++) {

        //     $newProject = new Project();

        //     $newProject->title = $faker->word();
        //     $newProject->client = $faker->name();
        //     $newProject->period = $faker->dateTimeInInterval('-6 week', '+7 days');
        //     $newProject->content = $faker->paragraph(12);

        //     $newProject->save();

        // }
    }
}
