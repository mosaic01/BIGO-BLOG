<?php

namespace App\Http\Controllers\Home;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyblogController extends Controller
{
    public function index()
    {
//        echo '<pre>';
//        print_r();
//        echo '</pre>';
        return view('blog/myblog');
    }
    public function handle( Request $request)
    {

        $post = $request->input("Blog");
        $validator = $this->validate($request ,
            [
                'Blog.title'=>'required|min:2|max:50',
                'Blog.subject'=>'required|min:2|max:50',
                'Blog.author'=>'required|min:2|max:20',
                'Blog.label'=>'required|min:1|max:10',
                'Blog.content'=>'required|min:20|max:200000',
            ],
            [
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度不符',
                'max'=>':attribute 长度不符',
            ],
            [
                'Blog.title'=>'博文标题',
                'Blog.subject'=>'博文主题',
                'Blog.author'=>'博文作者',
                'Blog.label'=>'博文标签',
                'Blog.content'=>'博文内容',
            ]);
        if( $validator != null && $validator->fails() ){
            return redirect()->back()->withErrors($validator)->withInput(); //返回并保持数据
        }
        $blog = new Blog();
        $blog->uid = Auth::user()->id;
        $blog->title = $post['title'];
        $blog->subject = $post['subject'];
        $blog->author = $post['author'];
        $blog->label = $post['label'];
        $blog->content = $post['content'];
//
        if( $blog->save() ){
            return redirect('home/index')->with(['s_message'=>'博文添加成功']);
        }else{
            return redirect()->back()->withInput(); //返回并保持
        }
    }
}
