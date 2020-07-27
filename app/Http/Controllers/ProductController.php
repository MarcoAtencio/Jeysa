<?php

namespace App\Http\Controllers;

use App\Discount;
use App\ImagesProduct;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table("products")->paginate(10);

        return view("products.ProductList",["products" => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.ProductRegist");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->ID_Type = $request->type;
        $product->ID_Gender =$request->gender;
        $product->save();

        $discount = new Discount();
        $discount->amount = $request->discount;
        $discount->ID_Product = $product->id;
        $discount->save();


        if($request->hasFile('photo1')){
            $file = $request->file('photo1');
            $name = time().$request->name.'1.png';
            $file->move(public_path().'/product/img',$name);
            $imageProduct = new ImagesProduct();
            $imageProduct->path = $name;
            $imageProduct->ID_Product = $product->id;
            $imageProduct->save();
        }
        if($request->hasFile('photo2')){
            $file = $request->file('photo2');
            $name = time().$request->name.'2.png';
            $file->move(public_path().'/product/img',$name);
            $imageProduct=new ImagesProduct();
            $imageProduct->path = $name;
            $imageProduct->ID_Product = $product->id;
            $imageProduct->save();
        }
        if($request->hasFile('photo3')){
            $file = $request->file('photo3');
            $name = time().$request->name.'3.png';
            $file->move(public_path().'/product/img',$name);
            $imageProduct=new ImagesProduct();
            $imageProduct->path = $name;
            $imageProduct->ID_Product = $product->id;
            $imageProduct->save();
        }
        return redirect()->route('adminHome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
