<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'title' => 'Стройка',
                'description' => 'Плитка, шпаклевка, поклейка...',
                'parent_id' => null,
        ]);

        DB::table('categories')->insert([
            'title' => 'Информационные технологии',
            'description' => 'Программирование, верстка, алгоритмизация...',
            'parent_id' => null,
        ]);

        DB::table('categories')->insert([
            'title' => 'Услуги населению',
            'description' => 'Стрижка, выгул, присмотр...',
            'parent_id' => null,
        ]);
    }
}
