<?php

namespace App\Http\Controllers;

use App\Models\Main_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Main_ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $main_product = Main_Product::get();
        return view('main_product_list', ['mp' => $main_product]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('main_product_form');
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
        $main_product_form = $request->all();
        //dd($main_product_form);

        $main_product = new Main_product();
        $path = $request->file('file')->store('public');

        $main_product->file = $path;
        $main_product->price = $main_product_form['price'];
        $main_product->old_price = $main_product_form['old_price'];
        $main_product->name = $main_product_form['name'];
        $main_product->save();

        return redirect()->route('main_product.index');
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
        $old_main_product = Main_Product::find($id);

        return view('edit_main_product', ['emp' => $old_main_product]);
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
        $main_product_form = $request->all();
        //dd($main_product_form);

        $main_product = Main_product::find($id);


        $path = $request->file('file')->store('public');

        $main_product->file = $path;
        $main_product->price = $main_product_form['price'];
        $main_product->old_price = $main_product_form['old_price'];
        $main_product->name = $main_product_form['name'];
        $main_product->save();

        return redirect()->route('main_product.index');
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
        $str = Main_product::find($id);
        Storage::delete($str->file);

        $str->delete();
        return redirect()->route('main_product.index');
    }
}
