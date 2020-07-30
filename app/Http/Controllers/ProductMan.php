<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductMan extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('ID_Gender',1)->get();
        $products= collect($products)->map(function ($product){
        $image = DB::table('images')->where('ID_Product','=', $product->id)->get()->first();
        $discount = DB::table('discounts')->where('ID_Product','=', $product->id)->get()->first();
        $product->discount = $discount->amount;
        if(isset($image->path)){
            $product->image1 = $image->path;
        }
        else {

        }

        return $product;
    });

    return view('clients.man',["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $images = DB::table('images')->where('ID_Product','=', $product->id)->get();
        $product->image1 = $images[0]->path ?? '';
        $product->image2 = $images[1]->path ?? '';
        $product->image3 = $images[2]->path ?? '';

        return view('clients.manDetail',["product"=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
