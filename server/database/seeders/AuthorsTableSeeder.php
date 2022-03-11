<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a1 = new Author();
        $a1->firstName = "Max";
        $a1->lastName = "Mustermann";
        $a1->save();

        $a2 = new Author();
        $a2->firstName = "Fritz";
        $a2->lastName = "Palme";
        $a2->save();

        $a3 = new Author();
        $a3->firstName = "Maxime";
        $a3->lastName = "Musterfrau";
        $a3->save();
    }
}
