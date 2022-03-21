<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function addPost()
    {
    
        return view('add-post');
    }

    public function createPost(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post_created','Post has been created successfully');
    }

    public function getPost()
    {
        $posts = post::orderBy('id','DESC')->get();
        return view('posts',compact('posts'));
    }

    public function deletePost($id)
    {
        Post::where('id',$id)->delete();
        return back()->with('post_deleted', 'post has been delete sucessfully!');
    }

    public function editPost($id)
        {
            $Post=Post::find($id);
            return view('edit-post',compact('post'));
        }
    
}
