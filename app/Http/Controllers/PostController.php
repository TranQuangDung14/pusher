<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        # code...
        return view('user.posts');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        $data = new Post();
        $data->author = $request->author;
        $data->title = $request->title;

        $data->save();
        // $post_data =$request->validate([
        //     'title'=>'required|string',
        //     'author'=>'required|string',
        // ]);
        // Post::create($post_data);
        // $data=[
        //     'title'=>$post_data['title'],
        //     'author'=>$post_data['author'],
        // ];
        // $all_data= Post::get();
        event(new PostCreated($data));
        // event(new PostCreated('hello world'));
        return redirect()->back();
    }
    public function data(){
        $data=Post::get();
          return response()->json([
            'data' => $data,
        ]);
        // return response()->json(['message' => 'Success'], 200);
        }

}
