<?php

namespace Database\Seeders;

use Illuminate\Database\type\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\type;
use PHPUnit\TextUI\Configuration\Php;

class typesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = ["FrontEnd", "BackEnd", "FullStack"];

        foreach ($types as $type) {

            $newtype = new type;

            $newtype->name = $type;
            $newtype->save();
        }
    }
}
