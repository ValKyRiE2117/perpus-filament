<?php

namespace Database\Seeders;

use App\Models\BooksModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BooksModel::create([
            'isbn' => '978-3-16-148410-0',
            'title' => 'The Great Adventure',
            'description' => 'An epic tale of adventure and discovery.',
            'categories_id' => 1,
            'author_id' => 1,
            'publisher' => 'Adventure Press',
            'published_year' => 2020,
            'pages' => 350,
            'stock' => 10,
        ]);

        BooksModel::create([
            'isbn' => '978-1-23-456789-0',
            'title' => 'Science Wonders',
            'description' => 'Exploring the wonders of science and technology.',
            'categories_id' => 5,
            'author_id' => 2,
            'publisher' => 'Science World',
            'published_year' => 2018,
            'pages' => 220,
            'stock' => 5,
        ]);

        BooksModel::create([
            'isbn' => '978-0-12-345678-9',
            'title' => 'Historical Insights',
            'description' => 'A deep dive into significant historical events.',
            'categories_id' => 2,
            'author_id' => 3,
            'publisher' => 'History House',
            'published_year' => 2015,
            'pages' => 400,
            'stock' => 7,
        ]);

        BooksModel::create([
            'isbn' => '978-9-87-654321-0',
            'title' => 'Fictional Realms',
            'description' => 'A journey through imaginative fictional worlds.',
            'categories_id' => 1,
            'author_id' => 4,
            'publisher' => 'Fictional Press',
            'published_year' => 2021,
            'pages' => 280,
            'stock' => 12,
        ]);
    }
}
