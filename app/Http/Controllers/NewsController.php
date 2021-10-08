<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function frontend_index()
    {
        $news = News::all();
        return view('frontend_index', compact('news'));
    }

    public function backend_index()
    {
        $news = News::all();
        return view('backend_index', compact('news'));
    }

    public function tambahinfo() {
        return view('tambahinfo');
    }

    public function store(Request $request) {
        News::create([
            'slug' => Str::slug($request->title),
            'title' => $request->input('title'),
            'content' => $request->input('content')
        ]);

        return redirect()->route('backend_index');
    }
}
