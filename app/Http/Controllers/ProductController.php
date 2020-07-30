<?php

namespace App\Http\Controllers;

use App\Discount;
use App\ImagesProduct;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table("products")->get();

        $products= collect($products)->map(function ($product){
            $image = DB::table('images')->where('ID_Product','=', $product->id)->get();
            $discount = DB::table('discounts')->where('ID_Product','=', $product->id)->get()->first();
            $product->discount = $discount->amount;
            if(isset($image[0]->path)){
                $product->image1 = $image[0]->path;
                $product->image2 = $image[1]->path;
                $product->image3 = $image[2]->path;
            }
            else {

            }

            return $product;
        });


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
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $discount = DB::table('discounts')->where('ID_Product','=', $product->id)->get()->first();
        $product->discount= $discount->amount;
        return view("products.ProductUpdate",["product"=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return void
     */
    public function update(Request $request, Product $product)
    {
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
