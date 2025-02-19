<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuthorBook;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AuthorBook::insert([[
            'author_id' => 9,
            'book_id' => 19,
        ],
        [
            'author_id' => 12,
            'book_id' => 21,
        ]]
    );
    }
}
