<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogContoller extends Controller
{
    public function index()
    {
        $blogs = Post::paginate(5);
        return view('Dashbord.Home.blogs',['blogs' => $blogs]);
    }
}
