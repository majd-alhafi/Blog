<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $user_id;
    public function index()
    {
        $posts = Post::all();
        return view('index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    private function uploadImage(Request $request)
    {
        $file= $request->image;
        $filename= date('YmdHi').$file->getClientOriginalName();
        //dd($filename);
        $file->move(public_path('/images/client'), $filename);
        return $filename;

    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
        ]);
        $this->user_id = request()->session()->get('LoggedIn');
        $attributes['user_id'] = $this->user_id;
        $attributes['image'] = $this->uploadImage($request);
        Post::create($attributes);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post-details',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit-post',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $this->user_id = request()->session()->get('LoggedIn');
        if(isset($this->user_id)){
            $attributes['user_id'] = $this->user_id;
            if(isset($request->image))
                $attributes['image'] = $this->uploadImage($request);
            Post::whereId($id)->update($attributes);

            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
    public function add()
    {
        $this->user_id = request()->session()->get('LoggedIn');
        if (isset($this->user_id)){
            return view('add-post');
        }
        else {
            return redirect('/login');
        }
    }

}
