<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->insert(
            [
                'title' => 'Ремонт ванной',
                'description' => 'Надо положить плитку',
                'user_id' => 1,
                'level_id' => 2,
                'category_id' => 1,
            ]
        );
    }
}
