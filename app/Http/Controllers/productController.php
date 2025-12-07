<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
     {
        $produk = [
            ['nama'=>'Laptop','harga'=>1000000,'stok'=>50],
            ['nama'=>'Smartphone','harga'=>500000,'stok'=>35],
            ['nama'=>'Headset','harga'=>210000,'stok'=>75],
            ['nama'=>'Keyboard Mouse','harga'=>350000,'stok'=>90],

       ];  
       return view('produk.index',compact('produk') );
    }
}