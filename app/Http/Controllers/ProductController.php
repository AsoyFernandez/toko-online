<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function showAll() {
	// kode logika untuk mengambil dan menampilkan semua data
    	$dataProductDariModel = Product::all();
		return view(‘product.display’, [“products” =>
		$dataProductDariModel]);
	}
	public function saveNew(Request $request){
	// kode logika untuk menyimpan product baru
	}

	public function create(Request $request){
	$product_name = $request->get("product_name");
	$product_stock = $request->get("stock");
	$product_desc = $request->get("description");
	$product_price = $request->get("price");
	}

	public function show($id){
		
	}
}
