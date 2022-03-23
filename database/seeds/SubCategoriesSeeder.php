<?php

use Illuminate\Database\Seeder;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        for ($i = 1; $i < 12; $i++) {
            for ($j = 0; $j < 3; $j++) {
                array_push($arr, ['name' => str_random(10), 'category_id' => $i, 'created_at' => now()]);
            }
        }
        DB::table('sub_categories')->insert($arr);
    }
}
