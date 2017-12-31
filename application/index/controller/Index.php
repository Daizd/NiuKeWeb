<?php
namespace app\index\controller;
use \think\captcha\Captcha;

class Index extends \think\Controller
{
    public function index()
    {
		include "dbConfig.php";////引入dbConfig.php
		initDB_M();//调用dbConfig.php的函数初始化数据库
        return $this->fetch();
	}
    public function home(){
        //从控制器跳转到视图
        //$list = db('article')->select();
        //$article = db('article');
        //$list = $article->query("select * from article limit 12");
        // 把一个变量赋值给模版
        // 第一个参数：模版变量
        // 第二个参数：值
        //$this->assign('article_list',$list);
        //$this->assign('article_list',$list);
        return $this->fetch();
    }
}
