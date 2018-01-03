<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3 0003
 * Time: 下午 6:23
 */

namespace app\index\controller;


use think\Controller;

class QuestionBank extends Controller
{
    function questionBank(){
        return $this->fetch();
    }
}