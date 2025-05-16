<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            ['title' => 'Bumi Manusia', 'author_id' => 1, 'published_year' => 1980],
            ['title' => 'Laskar Pelangi', 'author_id' => 2, 'published_year' => 2005],
            ['title' => 'Saman', 'author_id' => 3, 'published_year' => 1998],
            ['title' => 'Rindu', 'author_id' => 4, 'published_year' => 2014],
            ['title' => 'Pada Sebuah Kapal', 'author_id' => 5, 'published_year' => 1973],
            ['title' => 'Hafalan Shalat Delisa', 'author_id' => 6, 'published_year' => 2005],
            ['title' => 'La Barka', 'author_id' => 7, 'published_year' => 2001],
        ]);

    }
}
