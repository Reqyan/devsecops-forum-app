<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index(){
        return view('posts.index');        
    }

    public function create()
    {
        $posts = Posts::all();
        return view('posts.create', compact('posts'));
    }

    public function edit($id){
        $posts = Posts::all();
        $data = Posts::find($id);
        return view('posts.edit', compact('posts', 'data'));
    }

    public function store(Request $request){
        $request->validate([
            'user_id' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'about' => 'required|string',
        ]);

        $posts_create = $request->except('_token');
        Posts::create($posts_create);

        return redirect()->route('posts.index')->with('success', 'Postingan Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|string',
            'title' => 'required|string',
            'content' => 'required|string',
            'about' => 'required|string',
        ]);

        $posts_update = $request->except('_token');
        $post = Posts::find($id);
        $post->update($posts_update);

        return redirect()->route('posts.index')->with('success', 'Postingan Diperbarui');
    }

    public function delete($id)
    {
        Posts::find($id)->delete();
        return redirect()->route('posts.index')->with('success', 'Postingan Dihapus');
    }
}
