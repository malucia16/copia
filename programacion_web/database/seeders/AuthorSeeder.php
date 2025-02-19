<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author = new Author();
        $author->name = 'Julio Cortázar';
        $author->nationality= 'Argentino';
        $author->birth_date = '1914-08-26';
        $author->save();
    }
}
