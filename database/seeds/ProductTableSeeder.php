<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
			"name" => "Produk A",
			"description" => "Deskripsi Produk A created by model"
		]);

        $product_baru = new Product;
        $product_baru->name = "Sepatu Coder";
        $product_baru->description = "Deskripsi produk sepatu coder";
        $product_baru->save();
    }
}
