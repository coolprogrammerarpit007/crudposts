<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Posts::all();
        $data = compact('post');
        return view('blog-post')->with($data);
    }

    // function when get triggered use to show the home page.
    public function home(){
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // to store data into table
        $request->validate([
            'title'=>'required|max:256',
            'body'=>'required'
        ]);
        $post = new Posts();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->save();

        return redirect('submit/view');
    }

    // edit data
    public function edit(Request $request, $id){
        $post = Posts::find($id);
        $data = compact('post');
        return view('edit-post')->with($data);
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $post = Posts::all();
        $data = compact('post');
        return view('blog-post')->with($data);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {


        $request->validate([
            'title' => 'required|max:256',
            'body' => 'required'
        ]);

        $title =  $request->title;
        $body =  $request->body;
        $updatePostData =  Posts::find($id);
        // check if post data exist or not
        if($updatePostData){
            $updatePostData->title =  $title;
            $updatePostData->body =  $body;
            $updatePostData->save();
        }
        return redirect('blog-post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
