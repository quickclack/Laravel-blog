<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            's' => 'required'
        ]);

        $s = $request->s;

        $posts = Post::where('title', 'LIKE', "%{$s}%")->with('category')->paginate(4);

        return view('front.posts.search', compact('posts', 's'));
    }
}
