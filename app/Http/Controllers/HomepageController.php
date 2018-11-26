<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        Post::create([
            "content" => "my first post",
        ]);

        return Post::all();
    }
}
