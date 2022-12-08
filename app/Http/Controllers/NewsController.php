<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        // собираем список новойстей из базы и вывести во вьюшку news_list
        $news = News::get();
        return view('news_list', ['yyyyy' => $news]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('news_form');
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
        $news_form = $request->all();
        //dd($news_form);

        $news = new News();
        $path = $request->file('file')->store('public');

        $news->file = $path;
        $news->title = $news_form['title'];
        $news->text = $news_form['text'];
        $news->date = $news_form['date'];
        $news->save();

        return redirect()->route('news.index');
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
        $old_news = News::find($id);

        return view('edit_news', ['nnn' => $old_news]);



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

        $news_form = $request->all();
        //dd($news_form);

        $news = News::find($id);


        $path = $request->file('file')->store('public');

        $news->file = $path;
        $news->title = $news_form['title'];
        $news->text = $news_form['text'];
        $news->date = $news_form['date'];
        $news->save();

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // удаление физичееского файла
        $str = News::find($id);
        Storage::delete($str->file);

        $str->delete();
        return redirect()->route('news.index');

    }
}
