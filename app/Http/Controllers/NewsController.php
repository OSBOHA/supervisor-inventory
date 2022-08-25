<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use App\Models\Week;

class NewsController extends Controller
{
    public function __construct()
    {
        if (Auth::check() && !Auth::user()->hasRole('admin')) {
            return view('errors.unauthorized');
        }
    }

    public function allNews()
    {
        $currentWeek = Week::orderBy('created_at', 'desc')->first();
        $news = News::with('week')->orderBy('created_at', 'desc')->get();

        return view('news.all')->with('news',$news)->with('currentWeek',$currentWeek);
    }

    public function create()
    {
        return view('news.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $week = Week::orderBy('created_at', 'desc')->first();

        News::create([
            'week_id' => $week->id,
            'title' => $request->title,
        ]);
        return redirect()->route('news.all', ['messages' => 'news added']);
    }

    public function edit($id)
    {
        $news = News::find($id);
        if ($news) {
            return view('news.update_news', compact('news'));
        } else {
            return view('errors.not_found');
        }
    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
        ]);

        $news = News::find($id);

        $news->title = $request->title;
        $news->save();

        return redirect()->route('news.all', ['messages' => 'news updated']);
    }

    public function delete($id)
    {

        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.all', ['messages' => 'news deleted']);
    }
}
