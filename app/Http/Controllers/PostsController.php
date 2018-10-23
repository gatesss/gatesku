<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Http\Resources\Post as PostResource;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles
        //$posts = Post::paginate(15);
        $posts=Post::All(); 

        // Return collection of articles as a resource
        //return PostResource::collection($posts);
        return response()->json($posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = $request->title;
        $postss = $request->body;
        Post::create([
                'title' => $posts,
                'body' => $postss
        ]);

        return response()->json([

                'massage' => 'success'
        ]);
        
        
    }


    // public function update(Request $request, $id)
    //{
   //     $request->validate([
   //     'title' => 'required',
    //    'body' => 'required'
    //    ]);

   //     $post = Post::where('id', $id)->first();
    //    $post->title = $request->get('title');
   //     $post->body = $request->get('body');
     //
    //    return response()->json([
//
       //         'massage' => 'success'
       // ]);

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response


     */
    public function gates(Request $request)
    {
        $post = $request->isMethod('put') ? Post::findOrFail($request->id) : new Post;

        //$post->id = $request->input('id');
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        if($post->save()) {
            return response()->json($post);
        }
        
    }


   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        // Get article
        $posts = Post::findOrFail($id);

        // Return single article as a resource
        return response()->json($posts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get article
        $posts = Post::findOrFail($id);

        if($posts->delete()) {
            return response()->json($posts);
        }    
    }
}
