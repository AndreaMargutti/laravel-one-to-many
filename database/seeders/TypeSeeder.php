<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $typeNames = [
            "Full-Stack",
            "Front-End",
            "Back-End",
            "Database"
        ];

        foreach ($typeNames as $typeName) {
            # code...
            $type = new Type();
            $type->name = $typeName;
            $type->save();
        }
    }
}