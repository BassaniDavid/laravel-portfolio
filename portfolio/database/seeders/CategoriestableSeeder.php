<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriestableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
                "web portfolio",
                "homepage layout",
                "gestione dati"
        ];

        foreach ($categories as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;

            $newCategory->save();
        }
    }
}
