<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    private $validationRequiredStr = 'required|string';

    public function index(){
        $posts = Posts::with('user')->get();
        return view('posts.index', compact('posts'));        
    }

    public function detail($id){
        $post = Posts::with('comments')->findOrFail($id);
        return view('posts.detail', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit($id){
        $post = Posts::findOrFail($id);
        abort_if($post->user_id != Auth::user()->id, 403);
        return view('posts.edit', compact('post'));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => $this->validationRequiredStr,
            'category' => $this->validationRequiredStr,
            'content' => $this->validationRequiredStr,
        ]);
        
        // Assign user_id from the authenticated user to the validated data
        $validatedData['user_id'] = Auth::id();

        Posts::create($validatedData);

        return redirect()->route('index')->with('success', 'Postingan Berhasil Ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => $this->validationRequiredStr,
            'category' => $this->validationRequiredStr,
            'content' => $this->validationRequiredStr,
        ]);

        $post = Posts::findOrFail($id);
        abort_if($post->user_id != Auth::user()->id, 403);
        $post->update($request->only('title', 'category', 'content'));

        return redirect()->route('index')->with('success', 'Postingan Diperbarui');
    }

    public function delete($id)
    {
        $post = Posts::findOrFail($id);
        abort_if($post->user_id != Auth::user()->id, 403);
        $post->delete();

        return redirect()->route('index')->with('success', 'Postingan Dihapus');
    }
}
