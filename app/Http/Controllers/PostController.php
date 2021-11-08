<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Post|Post[]|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::simplePaginate(4);
        return view('site.post.index', ['posts' => $posts]);
    }

    public function indexAdmin(){
        $posts = Post::where('user_id', auth()->user()->id)->get();
        return view('admin.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return view('admin.post.create_edit', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $post = $request->only(['title', 'description', 'content', 'source', 'link_source']);
        $post['category_id'] = $request->category;
        $post['user_id'] = auth()->user()->id;

        $post['image'] = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $post['image']);

        Post::create($post);

        return redirect()->route('post.indexAdmin');
    }


    public function show($id)
    {
        $post = Post::query()->where('id', $id)->first();
        return view('site.post.show', ['post' => $post]);
    }


    public function edit($id)
    {
        return view('admin.post.create_edit', ['post' => Post::with('category')->where('id', $id)->first(), 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        //tratamento pra verificar se foi ou não alterada a imagem
        if (isset($request->image)) {
            $image = uniqid() . '-' . $request->title . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $image);
            $request->image = $image;
        }else{
            $requestImage= Post::query()->where('id', $id)->first();
            $request->image = $requestImage->image;
        }



        Post::where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
            'image' => $request->image,
        ]);

        return redirect()->back()->with('message', 'Notícia editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return string
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();
        return redirect()->route('post.create')->with('message', 'Post deletado com sucesso!');
    }
}
