<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake  = Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('products')->insert([
                'category_id' =>$fake->numberBetween(1,3),
                'name' => $fake->name,
                'information' => $fake->sentence(),
                'price' => $fake->numerify($string = '600000'),
                'image' => $fake->imageUrl($width = 200, $height = 200),
                'status' =>$fake->numberBetween(1,2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'description' => $fake->sentence(15)
            ]);
        }
    }
}
