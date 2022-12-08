<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banner = Banner::get();
        return view('banner_list', ['bbb' => $banner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('banner_form');
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
        $banner_form = $request->all();
        //dd($banner_form);

        $banner = new Banner();
        $path2 = $request->file('file')->store('public');

        $banner->file = $path2;
        $banner->title = $banner_form['title'];
        $banner->big_title = $banner_form['big_title'];
        $banner->long_title = $banner_form['long_title'];
        $banner->white_title = $banner_form['white_title'];
        $banner->save();

        return redirect()->route('banner.index');

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
        $old_banner = Banner::find($id);

        return view('edit_banner', ['bbb' => $old_banner]);
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
        $banner_form = $request->all();
        //dd($banner_form);

        $banner = Banner::find($id);

        $path = $request->file('file')->store('public');

        $banner->file = $path;
        $banner->title = $banner_form['title'];
        $banner->big_title = $banner_form['big_title'];
        $banner->long_title = $banner_form['long_title'];
        $banner->white_title = $banner_form['white_title'];
        $banner->save();

        return redirect()->route('banner.index');


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

        $str_ban = Banner::find($id);
        Storage::delete($str_ban->file);

        $str_ban->delete();
        return redirect()->route('banner.index');

    }
}
