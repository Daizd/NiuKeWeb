<?php 
namespace app\admin\controller;
/**
* 
*/
class Course extends \think\Controller
{
	
	public function course_list()
	{
		$list = db('course')->select();
		 $this->assign('course_list',$list);
		return $this->fetch();
	}
	public function add()
	{
		// 进入添加界面
		return $this->fetch();
	}
	public function save()
	{
		$add_data = input();
		 $files = request()->file('course_thumb');
		 // print_r($files);exit();
		 if ($files) {
		 	$file_info = $files->move('uploads');
		 	$add_data['course_thumb'] = $file_info->getSaveName();
		 }

		 $add_data['c_create_time'] = time();
		db('course')->insert($add_data);
	
		$this->success('添加成功，哎哟不错！','course_list');

	}
}
 ?>