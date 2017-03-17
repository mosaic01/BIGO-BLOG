<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //    指定表名
    protected $table = 'blog';

    //    指定主键
    protected $primaryKey = 'id';

    //    是否开启ct mt
    public $timestamps = true;

    protected $fillable = ['title','author','uid','content','picture','label'];

    //    执行新增，更新操作是自动写入时间
    protected function getDateFormat()
    {
        return time();
    }
    protected function asDateTime( $time)
    {
        return $time;
    }
}
