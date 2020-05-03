<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'Roman Zagday',
                'email' => 'roman.zagday@gmail.com',
                'password' => bcrypt('zagday'),
        ]);

        DB::table('users')->insert([
            'name' => 'Vadim Zubelic',
            'email' => 'vadim.zubelic@gmail.com',
            'password' => bcrypt('zubelic'),
        ]);

        DB::table('users')->insert([
            'name' => 'Dima Tutin',
            'email' => 'dima.tutin@gmail.com',
            'password' => bcrypt('tutin'),
        ]);
    }
}
