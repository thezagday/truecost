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
                'candidate_id' => 2,
                'created_at' => Carbon::now(),
                'end_time_at' => (Carbon::now())->addHours(2),
            ]
        );
    }
}
