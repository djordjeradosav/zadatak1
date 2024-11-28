<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumanite\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('comments')->get();
    
        return response()->json([
            'success' => true,
            'data' => $posts
        ]);
    }
   
   
    public function store(Request $request)
        {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required',
            ]);

            $post = Post::create($validated);

            return response()->json([
                'success' => true,
                'data' => $post
            ], 201);
        }

        public function show(Post $post)
        {
            return response()->json([
                'success' => true,
                'data' => $post->load('comments')
            ]);
        }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
