<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/4 0004
 * Time: 上午 10:43
 */

namespace app\index\controller;


use think\Controller;

class CourseAndroid extends Controller
{
    function courseAndroid(){
        return $this->fetch();
    }
}