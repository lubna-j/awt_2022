<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'LG mobile',
                'price' => "200$",
                "description" => "A smartphone 4G RAM and much more feature",
                "category" => "mobile",
                "gallery" => "https://api.time.com/wp-content/uploads/2017/02/lg-g6-02.jpg",
            ],
             [
                'name' => 'LG mobile',
                'price' => "200$",
                "description" => "A smartphone 4G RAM and much more feature",
                "category" => "mobile",
                "gallery" => "https://api.time.com/wp-content/uploads/2017/02/lg-g6-02.jpg",
            ],
             [
                'name' => 'LG mobile',
                'price' => "200$",
                "description" => "A smartphone 4G RAM and much more feature",
                "category" => "mobile",
                "gallery" => "https://api.time.com/wp-content/uploads/2017/02/lg-g6-02.jpg",
            ],
             [
                'name' => 'LG mobile',
                'price' => "200$",
                "description" => "A smartphone 4G RAM and much more feature",
                "category" => "mobile",
                "gallery" => "https://api.time.com/wp-content/uploads/2017/02/lg-g6-02.jpg",
            ],
             [
                'name' => 'LG mobile',
                'price' => "200$",
                "description" => "A smartphone 4G RAM and much more feature",
                "category" => "mobile",
                "gallery" => "https://api.time.com/wp-content/uploads/2017/02/lg-g6-02.jpg",
            ],

           
            ]);
    }
}
