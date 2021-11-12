<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::simplePaginate(4);
        return view('site.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::query()->where('id', $id)->first();
        return view('site.show', ['post' => $post]);
    }

    public function about()
    {
        return view('site.about');
    }

    public function schedule()
    {
        return view('site.schedule');
    }

    public function announcers()
    {
        return view('site.announcers');
    }
}
