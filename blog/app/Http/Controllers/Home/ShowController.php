<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;

class ShowController extends Controller
{
    public function index(Request $request,$id = 1)
    {
        $blog = Blog::find($id);
        return view('blog.show',['blog_info'=>$blog]);
    }

}
