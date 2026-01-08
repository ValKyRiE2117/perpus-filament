<?php

namespace Database\Seeders;

use App\Models\CategoriesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoriesModel::create([
            'name' => 'Fiction',
        ]);

        CategoriesModel::create([
            'name' => 'Non-Fiction',
        ]);

        CategoriesModel::create([
            'name' => 'Science Fiction',
        ]);

        CategoriesModel::create([
            'name' => 'Biography',
        ]);

        CategoriesModel::create([
            'name' => 'Science',
        ]);
    }
}
