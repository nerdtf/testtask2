<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        for ($i = 0; $i < 11; $i++) {
           array_push($arr, ['name' => str_random(10),'created_at' => now()]);
        }
        DB::table('categories')->insert($arr);
    }
}
