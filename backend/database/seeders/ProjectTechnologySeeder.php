<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Technology;

class ProjectTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $boolBNB = Project::find(1);
        $technologies = Technology::all();

        $boolBNB->technologies()->attach($technologies->pluck("id")->toArray());

        $boolflix = Project::find(2);
        $bfTechnologies = Technology::whereIn("id", [1, 2, 3, 4])->get();

        $boolflix->technologies()->attach($bfTechnologies->pluck("id")->toArray());
    }
}
