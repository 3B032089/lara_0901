<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'content',
        'is_feature',
    ];

    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'is_feature' => 'boolean',
    ];

    public function index(){
        $posts = Post::orderBy('create_at', 'DESC')->get();
        $data = ['posts' => $posts];
        return view('admin.posts.index' , $data);
    }

    public function store(Request $request){
        Post::create($request->all());
        return redirect()->route('admin.posts.index');
    }
}
