<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lots')->insert(
            [
                'start_cost' => 100,
                'current_cost' => 100,
                'final_cost' => 100,
                'status' => 'active',
                'order_id' => 1,
                'user_id' => 1,
                'created_at' => new Carbon('2020-01-05 00:00:00'),
                'end_time_at' => (new Carbon('2020-01-05 00:00:00'))->addHours(2),
            ]
        );
    }
}
