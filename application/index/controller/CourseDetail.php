<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3 0003
 * Time: 下午 3:07
 */

namespace app\index\controller;

use think\Controller;

class CourseDetail extends Controller
{
    public function courseDetail(){

        return $this->fetch();
    }
}
?>