<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
                'title' => 'Начальный уровень',
                'description' => 'Дешево и сердито',
        ]);

        DB::table('levels')->insert([
            'title' => 'Средний уровень',
            'description' => 'Отношение "цена-качество"',
        ]);

        DB::table('levels')->insert([
            'title' => 'Высший уровень',
            'description' => 'Дорого и качественно',
        ]);
    }
}
