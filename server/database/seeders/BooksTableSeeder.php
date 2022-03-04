<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => Str::random(100),
            'isbn' => Str::random(20),
            'subtitle' => Str::random(100),
            'rating' => 4,
            'published' => new DateTime(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('books')->insert([
            'title' => Str::random(100),
            'isbn' => Str::random(20),
            'subtitle' => Str::random(100),
            'rating' => 4,
            'published' => new DateTime(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
