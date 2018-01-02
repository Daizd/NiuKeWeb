<?php
namespace app\forum\controller;

class Forum extends \think\Controller
{
    public function forum()
    {
		$list = db('post')->select();
		$this->assign('post_list',$list);
		return $this->fetch();
	}
	
	public function publish()
	{
		return $this->fetch();
	}
	
	public function doPublish(){
		$add_data = input();

		$add_data['create_time'] = time();
		db('post')->insert($add_data);
	
		$this->success('发表成功','index');
	}
	
	public function preview(){
		$post_id = input('post_id');
		$info = db('post')->where("post_id = ".$post_id)->find();
		$this->assign('info',$info);
        return $this->fetch();
	}
	
}