<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(Request $request)
    {
//        echo '<pre>';
//        print_r(session('s_message'));
//        echo '</pre>';
        return view('blog.index');
    }
}
