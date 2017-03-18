<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'title' => 'Down the rabbit hole',
                'type' => 'events'
            ],
            [
                'title' => '4 year anniversary',
                'type' => 'events'
            ],
            [
                'title' => 'Ludivico den audi',
                'type' => 'events'
            ]
        );
        DB::table('categories')->insert(
            [
                'title' => '4 year anniversary',
                'type' => 'events'
            ]
        );
        DB::table('categories')->insert(
            [
                'title' => 'Ludivico den audi',
                'type' => 'events'
            ]
        );
    }
}
