<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostsController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Post $post)
    {
        $data=[
            'post'=>$post,
        ];
        return view('admin.posts.edit',$data);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
