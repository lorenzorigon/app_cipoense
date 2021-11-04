<?php

namespace App\Http\Controllers;

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
        $posts = Post::all();
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        return view('post.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $post = $request->only(['title', 'description', 'content', 'source', 'linkSource']);
        $post['user_id'] = auth()->user()->id;

        $post['image'] = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $post['image']);



        Post::create($post);

        return redirect()->back()->with('message', 'Post criado com sucesso!');
    }


    public function show($id)
    {
        $post = Post::query()->where('id', $id)->first();
        return view('post.show', ['post' => $post]);
    }


    public function edit($id)
    {
        return view('post.create_edit')->with('post', Post::where('id',$id)->first());
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
        Post::where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
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
        $post = Post::where($id);
        $post->delete();
        return redirect()->back()->with('message', 'Post deletado com sucesso!');
    }
}
