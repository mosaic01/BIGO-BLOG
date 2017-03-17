<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Student;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function index( Request $req)
    {

    	// echo '<pre>';
    	// print_r($req->input());
    	$res =  Student::get();
    	dd($res);
    }
    public function file( Request $request)
    {
        if($request->isMethod('POST'))
        {

            $file = $request->file('resouce');

            if( $file->isValid() ){
                $origName = $file->getClientOriginalName(); //原文件名
                $mimeType = $file->getClientMimeType(); //文件类型
                $size = $file->getClientSize(); //文件大小
                $file_error = $file->getError(); //错误号
                $ext = $file->getClientOriginalExtension(); //扩展名
                $realPath = $file->getRealPath(); //临时绝对路径
                $fileName = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext; //新文件名 2017-03-16-07-00-41-58ca38194bb15.jpg
                $bool = Storage::disk('uploads')->put( $fileName , file_get_contents( $realPath ));

                var_dump($bool);

            }
            exit();
        }
        return view('student.file');
    }
    public function mail()
    {
        //        方法1 成功发送
        Mail::raw('我是内容',function( $message ){
            $res = $message->from('bigophp@163.com')->subject('我是标题')->to('765840389@qq.com');
            if( $res ){
                echo '发送成功';
            }else{
                echo '发送失败';
            }
        });

        //        方法2 报错554 DT:SPM 邮件含义敏感词汇  或者是域不对应问题 暂时未知
        //        Mail::send('student.mail' , [
        //            'name' => 'bigo' ,
        //            'time' => time()
        //        ] , function( $message ){
        //            $message->to('765840389@qq.com');
        //        });
    }
}
