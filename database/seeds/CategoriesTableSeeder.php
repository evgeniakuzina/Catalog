<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Phones',
        ]);
        DB::table('categories')->insert([
            'name' => 'Smartphones',
        ]);
        DB::table('categories')->insert([
            'name' => 'Household Electronic',
        ]);
        DB::table('categories')->insert([
            'name' => 'Photo',
        ]);

    }
}
