<?php

namespace Database\Seeders;

use Illuminate\Database\type\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\technology;

class ProjecttechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $boolBNB = Project::find(1);
        $technologies = technology::all();

        $boolBNB->technologies()->attach($technologies->pluck("id")->toArray());

        $boolflix = Project::find(2);
        $bfTechnologies = technology::whereIn("id", [1, 2, 3, 4])->get();

        $boolflix->technologies()->attach($bfTechnologies->pluck("id")->toArray());
    }
}
