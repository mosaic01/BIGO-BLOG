<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
//        echo '<pre>';
//        foreach($blog as $k=>$v){
//            print_r($v);
//        }
//        echo '</pre>';
        return view('blog.list',['blog_info'=>$blog]);
    }
}
