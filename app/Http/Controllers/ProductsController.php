<?php

namespace App\Http\Controllers;

use App\Products;

class ProductsController extends Controller
{
    public function index(){
    	$product = Products::all();
    	dd($product);
    }
}
