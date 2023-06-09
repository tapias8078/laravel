<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use Illuminate\Support\Facades\Gate;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts= Post::paginate(5);
        // if(!Gate::allows('index', $posts[0])){
        //     abort(403);
        // }
        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id','title');
        $post = new Post();
        //   if(!Gate::allows('create', $post)){
        //     abort(403);
        //     }
        return view('dashboard.posts.create', compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $post = new Post($request->validated());
        return to_route('post.index')->with('status', 'Nuevo post creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('posts');
    }
    public function upload(StoreRequest $request){
        $path = $request->file('image')->store('images', 'public');
        return 'imagen subida Exitosamente';
    }

}
