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

        echo "<pre>";
        print_r($request->all());
        echo "</pre";

        // Insert data into table
        $post = new Posts();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->save();

        return redirect('/submit/view');
    }

    // edit data
    public function getEditData($id){
        return view('edit-post');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
