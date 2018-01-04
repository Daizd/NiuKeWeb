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
    	$list1=db('direction')->select();
        $this->assign('new_list1',$list1);
        $list2=db('company')->select();
        $this->assign('new_list2',$list2);
        return $this->fetch();
    }
     public function update()
    {	

		$info=db('questionBank')->where("direction",input('direction'))->select();
        // print_r($info);exit();
		$this->assign('infos',$info);
		$list1=db('direction')->select();
        $this->assign('new_list1',$list1);
        $list2=db('company')->select();
        $this->assign('new_list2',$list2);
		return $this->fetch();
	}
}
