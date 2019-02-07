<?php

use Illuminate\Database\Seeder;

class tagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->truncate();

        for($i = 0 ; $i<=20; $i++){
            DB::table('tags')->insert([
                'name' => "tagName". str_random(10),
            ]);
        }

    }
}
