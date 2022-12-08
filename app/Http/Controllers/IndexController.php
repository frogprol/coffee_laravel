<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Main_Product;
use App\Models\News;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        $show_people = News::get();
        $banner = Banner::get();
        $section = Section::get();
        $product = Product::get();
        $main_product = Main_Product::get();

        return view('index', [
            'sssss' => $show_people,
            'fff' => $banner,
            'uuu' => $section,
            'pr' => $product,
            'mpr' => $main_product
            ]);
    }



}
