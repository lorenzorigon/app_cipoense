<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::where('id', auth()->user()->id)->get();
        $categories = Category::all();

        return view('admin.index', ['posts' => $posts, 'categories' => $categories]);

    }
}
