<?php
namespace app\forum\controller;
import('ORG.Util.Page');// 导入分页类

class Forum extends \think\Controller
{
    public function forum()
    {	
	
		$list = db('post')
				->alias('p')
				->field('p.post_id, p.post_heat, p.post_title, c.cat_name')
				->order('p.post_heat desc')
				->join('post_category c','p.post_cat_id = c.cat_id')
				->paginate(10);
		$this->assign('post_list',$list);
		return $this->fetch();
	}
	
	public function publish()
	{
		$post_cat_lists = db('post_category')->select();

		$this->assign('post_cat_lists',$post_cat_lists);
		return $this->fetch();
	}
	
	public function doPublish(){
		$add_data = input();

		$add_data['create_time'] = time();
		
		db('post')->insert($add_data);
	
		$this->success('发表成功','forum');
	}
	
	public function preview(){
		$post_id = input('post_id');
		
		$data = db('post')->field('post_heat')
								-> where("post_id = ".$post_id)
								->find();
		db('post')-> where("post_id", $post_id)
					->update(['post_heat'=>$data['post_heat']+1]);
		$info = db('post')->where("post_id = ".$post_id)->find();
		$this->assign('info',$info);
        return $this->fetch();
	}
	
}