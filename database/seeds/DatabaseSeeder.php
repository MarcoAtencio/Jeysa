<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table("sizes")->insert([
            "size" => "s",
        ]);
        DB::table("sizes")->insert([
            "size" => "m"
        ]);
        DB::table("sizes")->insert([
            "size" => "l"
        ]);
        DB::table("sizes")->insert([
            "size" => "xl"
        ]);

        DB::table("types")->insert([
            "name" => "camisa"
        ]);
        DB::table("types")->insert([
            "name" => "pantalon"
        ]);
        DB::table("types")->insert([
            "name" => "casaca"
        ]);

        DB::table("genders")->insert([
            "name" => "male"
        ]);
        DB::table("genders")->insert([
            "name" => "female"
        ]);

        DB::table("products")->insert([
            "name" => "fer",
            "price" => 40.6,
            "description" => "A new clothes",
            "ID_Type" => 1,
            "ID_Gender" =>1,
        ]);
        DB::table("products")->insert([
            "name" => "drTes",
            "price" => 9.6,
            "description" => "A new clo",
            "ID_Type" => 2,
            "ID_Gender" =>2,
        ]);
        DB::table("products")->insert([
            "name" => "rook",
            "price" => 100,
            "description" => "hat",
            "ID_Type" => 3,
            "ID_Gender" =>1,
        ]);

        DB::table("products_sizes")->insert([
            "stock" => 100,
            "ID_Product" => 1,
            "ID_Size" => 1
        ]);
        DB::table("products_sizes")->insert([
            "stock" => 300,
            "ID_Product" => 1,
            "ID_Size" => 2
        ]);
        DB::table("products_sizes")->insert([
            "stock" => 500,
            "ID_Product" => 1,
            "ID_Size" => 4
        ]);
        DB::table("products_sizes")->insert([
            "stock" => 40,
            "ID_Product" => 2,
            "ID_Size" => 1
        ]);
        DB::table("products_sizes")->insert([
            "stock" => 10,
            "ID_Product" => 2,
            "ID_Size" => 3
        ]);

        DB::table("discounts")->insert([
            "amount" => 0.6,
            "ID_Product" => 2
        ]);
        DB::table("discounts")->insert([
            "amount" => 0.2,
            "ID_Product" => 1
        ]);
        DB::table("discounts")->insert([
            "amount" => 0.4,
            "ID_Product" => 3
        ]);
    }
}
