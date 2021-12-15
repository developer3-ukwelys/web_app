<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroceriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
    DB::table('groceries')->delete();
    DB::table('groceries')->insert([
        'title' => 'Apple',
        'category' => 'fruits',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    ]);
    DB::table('groceries')->insert([
        'title' => 'Banana',
        'category' => 'fruits',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    ]);
    DB::table('groceries')->insert([
        'title' => 'Orange',
        'category' => 'fruits',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")
    ]);
    }
}
