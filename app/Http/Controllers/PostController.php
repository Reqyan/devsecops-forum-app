<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index(){
        $posts = Posts::all();
        return view('posts.index', compact('posts'));        
    }

    public function detail($id){
        $post = Posts::findOrFail($id);
        return view('posts.detail', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit($id){
        $post = Posts::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'content' => 'required|string',
        ]);

        Posts::create($request->only('title', 'category', 'content'));

        return redirect()->route('index')->with('success', 'Postingan Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = Posts::findOrFail($id);
        $post->update($request->only('title', 'category', 'content'));

        return redirect()->route('index')->with('success', 'Postingan Diperbarui');
    }

    public function delete($id)
    {
        $post = Posts::findOrFail($id);
        $post->delete();

        return redirect()->route('index')->with('success', 'Postingan Dihapus');
    }
}
