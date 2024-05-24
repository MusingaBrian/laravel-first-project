<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // // $title = 'This is The Products Title';
        // // $description = 'This is the product description';
        // $data = [
        //     'productOne' => 'Techno',
        //     'productTwo' => 'itel',
        //     'productThree' => 'Oppo'
        // ];

        // //Compact Method
        // // return view('products.index', compact('title', 'description'));

        // //With Method
        // // return view('products.index')->with('title', $title);
        // // return view('products.index')->with('data', $data);

        // //Return Array
        // return view('products.index', [
        //     'data' => $data
        // ]);
    }

    // public function show($phone)
    // {
    //     $phones = [
    //         'itel' => 'Itel One',
    //         'oppo' => 'Oppo Two',
    //         'nokia' => 'Nokia One'
    //     ];


    //     return view('products.index', [
    //         'phones' => $phones[$phone] ?? 'Phone - ' . $phone . ' Not Found!'
    //     ]);
    // }


    public function show($id)
    {
        return view('products.index', compact('id'));
    }


    public function showString($str)
    {
        return view('products.index', compact('str'));
    }
    public function showStringAndInt($id, $str)
    {
        return view('products.index', compact('id', 'str'));
    }
}
