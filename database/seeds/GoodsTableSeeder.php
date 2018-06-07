<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('goods')->insert([
            'name' => 'Smartphone iPhone X',
        ]);
        DB::table('goods')->insert([
            'name' => 'Tablet iPad',
        ]);
        DB::table('goods')->insert([
            'name' => 'Phone Nokia 3310',
        ]);
        DB::table('goods')->insert([
            'name' => 'Air Conditioner Zanussi ZXS24CKYWI',
        ]);
        DB::table('goods')->insert([
            'name' => 'Camera Canon D65',
        ]);
        DB::table('goods')->insert([
            'name' => 'Washing machine Bosch ‎WAK24168IN ',
        ]);
        DB::table('goods')->insert([
            'name' => 'Stationary Phone Panasonic KX-TS2352RUB',
        ]);
    }
}
