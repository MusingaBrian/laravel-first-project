<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $title = 'This is The Products Title';
        // $description = 'This is the product description';
        $data = [
            'productOne' => 'Techno',
            'productTwo' => 'itel',
            'productThree' => 'Oppo'
        ];

        //Compact Method
        // return view('products.index', compact('title', 'description'));

        //With Method
        // return view('products.index')->with('title', $title);
        // return view('products.index')->with('data', $data);

        //Return Array
        return view('products.index', [
            'data' => $data
        ]);
    }
}
