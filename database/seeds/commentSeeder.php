<?php

use Illuminate\Database\Seeder;

class commentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();

        DB::table('comments')->insert([
            'id_post' => 1,
            'name' => 'Jason Bourne',
            'comment' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'date' => date("Y-m-d H:i:s")
        ]);
        DB::table('comments')->insert([
            'id_post' => 2,
            'name' => 'Thor',
            'comment' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'date' => date("Y-m-d H:i:s")
        ]);
        DB::table('comments')->insert([
            'id_post' => 3,
            'name' => 'Iron Man',
            'comment' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            'date' => date("Y-m-d H:i:s")
        ]);

    }
}
