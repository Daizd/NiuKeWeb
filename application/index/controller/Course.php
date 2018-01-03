<?php 
namespace app\index\controller;
/**
* 
*/
class Course extends \think\Controller
{
	public function course()
	{
		$list = db('course')->select();
		 $this->assign('course_list',$list);
        return $this ->fetch();
	}
	
}
