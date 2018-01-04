<?php
namespace app\index\controller;

class Index extends \think\Controller
{
    public function index()
    {
        return ;
	}
    public function home(){
		include "dbConfig.php";////引入dbConfig.php
		initDB_M();//调用dbConfig.php的函数初始化数据库


        //精品文章
        $article = db('niu_ke_post');
        $articleList = $article->query("select * from niu_ke_post limit 12");
        $this->assign('recommend_article_list',$articleList);

        //热门文章
        $heatArticleList = $article->query("select * from niu_ke_post order by post_heat DESC limit 3");
        $this->assign('heat_article_list',$heatArticleList);

        //热门课程
        $course = db('course')->select();
        $this->assign('course_list',$course);

        return $this->fetch();
    }
}
