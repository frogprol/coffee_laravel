<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $product = Product::get();
        return view('product_list', ['ppp'=>$product]);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product_form');
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

        $product_form = $request->all();
        //dd($product_form);

        $product = new Product();
        $path = $request->file('file')->store('public');

        $product->file = $path;
        $product->price = $product_form['price'];
        $product->old_price = $product_form['old_price'];
        $product->name = $product_form['name'];
        $product->save();

        return redirect()->route('product.index');
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

        $old_product = Product::find($id);
        return view('edit_products', ['ppp' => $old_product]);
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

        $product_form = $request->all();
        //dd($product_form);

        $products = Product::find($id);


        $path = $request->file('file')->store('public');

        $products->file = $path;
        $products->price = $product_form['price'];
        $products->old_price = $product_form['old_price'];
        $products->name = $product_form['name'];
        $products->save();

        return redirect()->route('product.index');
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

        $delpr = Product::find($id);
        Storage::delete($delpr->file);

        $delpr->delete();
        return redirect()->route('product.index');
    }
}
