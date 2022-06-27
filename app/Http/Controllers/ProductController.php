<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Show main page
    */
    public function show()
    {
       return view('index');
    }

    /**
     * Show page about
    */
    public function about()
    {
        return view('about');
    }

    /**
     * Show page catalog
    */
    public function catalog()
    {
        $pizzas = Product::prodArr;
        return view('catalog', ['pizzas' => $pizzas]);
    }

    /**
     * Show page basket
    */
    public function basket()
    {
        $products = [];
        if (session()->has('basket')) {
            $products = session('basket');
        }

        return view('basket', ['products' => $products]);
    }

    /**
     * Add product to basket
     *
    */
    public function add(Request $request)
    {
       $newProd =  Product::prodArr[$request->prod_type][$request->prod_id];

       if (session()->has('basket')) {
           session()->push('basket', Product::prodArr[$request->prod_type][$request->prod_id]);
       } else {
           session()->put('basket', [$newProd]);
       }

       return redirect('/basket');
    }

    /**
     * Delete product from basket
     *
     */
    public function delete(Request $request)
    {
        session()->forget("basket.{$request->prod_item}");

        return redirect()->back();
    }
}
