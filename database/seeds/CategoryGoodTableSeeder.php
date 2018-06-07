<?php

use Illuminate\Database\Seeder;

class CategoryGoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_good')->insert([
            'category_id' => rand(1, 4),
            'good_id' => rand(1, 7),
        ]);
        DB::table('category_good')->insert([
            'category_id' => rand(1, 4),
            'good_id' => rand(1, 7),
        ]);
        DB::table('category_good')->insert([
            'category_id' => rand(1, 4),
            'good_id' => rand(1, 7),
        ]);
        DB::table('category_good')->insert([
            'category_id' => rand(1, 4),
            'good_id' => rand(1, 7),
        ]);
        DB::table('category_good')->insert([
            'category_id' => rand(1, 4),
            'good_id' => rand(1, 7),
        ]);
        DB::table('category_good')->insert([
            'category_id' => rand(1, 4),
            'good_id' => rand(1, 7),
        ]);
        DB::table('category_good')->insert([
            'category_id' => rand(1, 4),
            'good_id' => rand(1, 7),
        ]);
    }
}
