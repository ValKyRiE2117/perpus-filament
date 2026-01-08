<?php

namespace Database\Seeders;

use App\Models\AuthorsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AuthorsModel::create([
            'name' => 'J.K. Rowling',
            'biography' => 'British author, best known for the Harry Potter series.',
            'nationality' => 'British',
        ]);

        AuthorsModel::create([
            'name' => 'George R.R. Martin',
            'biography' => 'American novelist and short story writer, known for A Song of Ice and Fire series.',
            'nationality' => 'American',
        ]);

        AuthorsModel::create([
            'name' => 'J.R.R. Tolkien',
            'biography' => 'English writer, poet, and academic, famous for The Lord of the Rings trilogy.',
            'nationality' => 'English',
        ]);

        AuthorsModel::create([
            'name' => 'Agatha Christie',
            'biography' => 'English writer known for her detective novels and short stories.',
            'nationality' => 'English',
        ]);
    }
}
