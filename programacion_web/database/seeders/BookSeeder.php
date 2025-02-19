<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = new Book();
        $book->title = 'El señor de los anillos';
        $book->published_at = '1954-07-29';
        $book->genre = 'Fantasía';
        $book->save();
    }
}
