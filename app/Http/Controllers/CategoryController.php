<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function show($id){
        $category = Category::where('id', $id)->first();
        return view('admin.category.show', ['category' => $category]);
    }

    public function create(){
        return view('admin.category.create_edit');
    }

    public function store(Request $request){
        Category::create($request->only('name'));
        return redirect()->route('category.index');
    }

    public function edit($id){
        $category = Category::where('id', $id)->first();
        return view('admin.category.create_edit', ['category' => $category]);
    }

    public function update(Request $request, $id){
        Category::where('id', $id)->update(['name' => $request->name]);
        return redirect()->route('category.index');
    }

    public function destroy($id){
        $category = Category::where('id', $id)->first();
        $category->delete();
        return redirect()->route('category.index');
    }
}
