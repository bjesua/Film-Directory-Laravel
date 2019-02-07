<?php

use Illuminate\Database\Seeder;

class filmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->truncate();

        DB::table('films')->insert([
            'name' => "Man of Steel ",
            'description' => "Clark Kent is an alien who as a child was evacuated from his dying world and came to Earth, living as a normal human. But when survivors of his alien home invade Earth, he must reveal himself to the world. ",
            'country' => "EEUU ",
            'genre' => "action,dc,comics, ",
            'release_date' => "2019-02-07",
            'rating' => "5",
            'ticket_price' => "25",
            'photo' => "3-Walmart-Superman-a.jpg",
        ]);

        for($i = 0 ; $i<10; $i++){
            DB::table('films')->insert([
                'name' => "Man of Steel ". str_random(4),
                'description' => "Clark Kent is an alien who as a child was evacuated from his dying world and came to Earth, living as a normal human. But when survivors of his alien home invade Earth, he must reveal himself to the world. ". str_random(4),
                'country' => "EEUU ". str_random(4),
                'genre' => "action,dc,comics, ". str_random(4),
                'release_date' => "2019-02-07",
                'rating' => "5",
                'ticket_price' => "25",
                'photo' => "3-Walmart-Superman-a.jpg",
            ]);
        }
    }
}
