<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\wamp64\www\niuke\public/../application/index\view\index\home.html";i:1514985732;s:54:"D:\wamp64\www\niuke\application\index\view\header.html";i:1514989431;s:54:"D:\wamp64\www\niuke\application\index\view\footer.html";i:1514978686;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E客网</title>
    <script type="text/javascript" src="_PUBLIC_/static/library/jquery/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="_PUBLIC_/static/library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="_PUBLIC_/static/library/fontasome/css/font-awesome.min.css">

    <link rel="stylesheet" href="_PUBLIC_/static/index/css/common.css">

</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
    }
</style>
<body class="body">

<section class="header container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
        <div class="container">
            <div class="navbar-header brand">
                <a class="navbar-brand icon" href="#">E客网</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
                <ul class="nav navbar-nav">
                    <li id= "home" class="navbar_li"><a href="<?php echo url('../public/index/index/home'); ?>">首页</a></li>
                    <li id="questionBank" class="navbar_li"><a href="#" >题库</a></li>
                    <li id="course" class="navbar_li"><a href="<?php echo url('../public/index/course/course'); ?>">课程</a></li>
                    <li id="job" class="navbar_li"><a href="#">求职</a></li>
                    <li id="it" class="navbar_li"><a href="#">IT</a></li>
                    <li id="forum" class="navbar_li"><a href="<?php echo url('../public/forum/forum/forum?aa=2'); ?>">讨论区</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <div class="input-group search_bar">
                            <input type="text" class="form-control in_search" placeholder="搜索"
                                   aria-describedby="basic-addon2">
                            <span class="input-group-addon search_icon" id="basic-addon2">
                                    <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </li>
					<?php if(\think\Session::get('uinfo')): ?>
					<li class="have_login">
                        <a href="#">
                            <i class="fa fa-envelope" aria-hidden="true" style=""></i> &nbsp;消息
                        </a>
                    </li>
                    <li class="have_login icon_li">
                        <img src="http://www.jcodecraeer.com/uploads/userup/15410/myface.png" alt="" class="user_icon">
                        <div class="img_hover">
                            <ul>
                                <li><i class="fa fa-envelope" aria-hidden="true" style=""></i>&nbsp;&nbsp;个人主页</li>
                                <li><i class="fa fa-envelope" aria-hidden="true" style=""></i>&nbsp;&nbsp;账号设置</li>
                                <li><i class="fa fa-envelope" aria-hidden="true" style=""></i>&nbsp;&nbsp;我的文章</li>
                                <li><i class="fa fa-envelope" aria-hidden="true" style=""></i>&nbsp;&nbsp;退出登陆</li>
                            </ul>
                        </div>
                    </li>
					<?php else: ?>
                    <li class="no_login" >
                        <ul class="ul_bar">
						<li>
									<a href="<?php echo url('userManage/login'); ?>">登陆</a>
								</li>
								<li>
									<a href="<?php echo url('../public/index/userManage/register'); ?>">注册</a>
								</li>
                        </ul>
                    </li>
                   <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</section>

<!--正文内容-->
<link rel="stylesheet" href="_PUBLIC_/static/index/css/home.css">
<div class="container main_body">
    <!--第一个板块-->
    <div class="row slide">
        <div class="col-md-8">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- 小圆点 -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- 轮播 -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="slide_img" src="https://i1.mifile.cn/a4/xmad_15138394047686_pqrwZ.jpg" alt="">
                        <div class="carousel-caption">
                            <h3>参加培训班</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img class="slide_img" src="https://i1.mifile.cn/a4/xmad_15141721956707_sixJR.jpg" alt="">
                        <div class="carousel-caption">

                        </div>
                    </div>
                    <div class="item">
                        <img class="slide_img" src="http://pic2.ooopic.com/13/33/63/97b1OOOPICb4.jpg" alt="">
                        <div class="carousel-caption">

                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="recommend_article">精品文章</div>
            <ul class="recommend_list">
                <!--foreach $article_list as $info-->
                <li>
                    <a  class="link" href="#" >怎么获取表单传过来的信息怎么获取表单传过来的信息</a>
                </li>
                <li>
                    <a  class="link" href="#" >怎么获取表单传过来的信息怎么获取表单传过来的信息</a>
                </li>
                <li>
                    <a  class="link" href="#" >怎么获取表单传过来的信息怎么获取表单传过来的信息</a>
                </li>
                <li>
                    <a  class="link" href="#" >怎么获取表单传过来的信息怎么获取表单传过来的信息</a>
                </li>
                <li>
                    <a  class="link" href="#" >怎么获取表单传过来的信息怎么获取表单传过来的信息</a>
                </li>
                <li>
                    <a  class="link" href="#" >怎么获取表单传过来的信息怎么获取表单传过来的信息</a>
                </li>
                <li>
                <a  class="link" href="#" >怎么获取表单传过来的信息怎么获取表单传过来的信息</a>
                </li>

                <!--{/foreach}-->
            </ul>
        </div>
    </div>

</div>
<!--第二个板块-->
<div class="container">
    <div class="class_box">
        <h3 class="class_title">
            <span class="tit-icon icon-new-l tit-icon-l"></span>
            <em>热</em>
            /
            <em>门</em>
            /
            <em>课</em>
            /
            <em>程</em>
            <span class="tit-icon icon-new-r tit-icon-r"></span>
        </h3>
        <ul class="class_list">
            <li class="class_li">
                <a href="<?php echo url('../public/index/course_detail/courseDetail'); ?>" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="class_box">
        <h3 class="class_title">
            <span class="tit-icon icon-recommend-l tit-icon-l"></span>
            <em>推</em>
            /
            <em>荐</em>
            /
            <em>课</em>
            /
            <em>程</em>
            <span class="tit-icon icon-recommend-r tit-icon-r"></span>
        </h3>
        <ul class="class_list">
            <li class="class_li">
                <a href="#" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--文章列表模块-->
<div class="container article_section">
    <div class="row">
        <div class="col-md-8">
            <h4 class="heat_article">热门文章</h4>
            <ul class="article_list">
                <li>
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="img">
                    <div class="article_description">
                        <a href="#" class="article_title">Android Paging Library按页获取网络数据实例</a>
                        <p class="article">新的 Paging Library 新的 Paging Library 成为了 Architecture Components 的一部分。虽然现在还是alpha阶段成为了 Architecture Components 的一部分。虽然现在还是alpha阶段，但是无疑你已经开始准备尝试了！我不准备全去讲它的用法，因为本文只是对 Chris Craik 这篇文章 的补充。 因为官方的示例第一眼看上去好像它只能跟 Room 一起</p>
                        <div class="list_msg">
                            <ul>
                                <li class="list-user">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span>泡妞的日子</span>
                                    </a>
                                </li>
                                <!--<li class="list-tag"><span><a href='/tags.php?/动画/' class='tag'>动画</a> </span></li> -->
                                <li class="list-msg">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    <span class="glyphicon-class">2407</span>
                                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                    <span class="glyphicon-class">1</span>
                                    <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                                    <span class="glyphicon-class">16</span>
                                </li>
                                <li class="update_time">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    <span class="glyphicon-class">17-11-03</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="img">
                    <div class="article_description">
                        <a href="#" class="article_title">Android Paging Library按页获取网络数据实例</a>
                        <p class="article">新的 Paging Library 新的 Paging Library 成为了 Architecture Components 的一部分。虽然现在还是alpha阶段成为了 Architecture Components 的一部分。虽然现在还是alpha阶段，但是无疑你已经开始准备尝试了！我不准备全去讲它的用法，因为本文只是对 Chris Craik 这篇文章 的补充。 因为官方的示例第一眼看上去好像它只能跟 Room 一起</p>
                        <div class="list_msg">
                            <ul>
                                <li class="list-user">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span>泡妞的日子</span>
                                    </a>
                                </li>
                                <!--<li class="list-tag"><span><a href='/tags.php?/动画/' class='tag'>动画</a> </span></li> -->
                                <li class="list-msg">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    <span class="glyphicon-class">2407</span>
                                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                    <span class="glyphicon-class">1</span>
                                    <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                                    <span class="glyphicon-class">16</span>
                                </li>
                                <li class="update_time">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    <span class="glyphicon-class">17-11-03</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

                <li>
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="img">
                    <div class="article_description">
                        <a href="#" class="article_title">Android Paging Library按页获取网络数据实例</a>
                        <p class="article">新的 Paging Library 新的 Paging Library 成为了 Architecture Components 的一部分。虽然现在还是alpha阶段成为了 Architecture Components 的一部分。虽然现在还是alpha阶段，但是无疑你已经开始准备尝试了！我不准备全去讲它的用法，因为本文只是对 Chris Craik 这篇文章 的补充。 因为官方的示例第一眼看上去好像它只能跟 Room 一起</p>
                        <div class="list_msg">
                            <ul>
                                <li class="list-user">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <span>泡妞的日子</span>
                                    </a>
                                </li>
                                <!--<li class="list-tag"><span><a href='/tags.php?/动画/' class='tag'>动画</a> </span></li> -->
                                <li class="list-msg">
                                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                    <span class="glyphicon-class">2407</span>
                                    <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                    <span class="glyphicon-class">1</span>
                                    <span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span>
                                    <span class="glyphicon-class">16</span>
                                </li>
                                <li class="update_time">
                                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                    <span class="glyphicon-class">17-11-03</span>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>


            </ul>
        </div>
        <div class="col-md-4">
            <h4 class="heat_article">最新提问</h4>
            <ul class="comment_ul">
                <li class="comment_list">
                    <a href="">
                        <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="img">
                    </a>
                    <div class="comment_rightBox">
                        <a href="#" class="user_name">开源中国</a>
                        <p class="comment">文件路径：通过Context.getExternalFilesDir()方法可以获取到 SDCard/Android/data/你的应用的包名/files/ 目录，一般放一些长时间保存的数据</p>
                        <ul>
                            <li class="list-msg">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                <span class="glyphicon-class">2</span>
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                <span class="glyphicon-class">0</span>
                            </li>
                            <li class="update_time">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                <span class="glyphicon-class">1小时前</span>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="comment_list">
                    <a href="">
                        <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="img">
                    </a>
                    <div class="comment_rightBox">
                        <a href="#" class="user_name">开源中国</a>
                        <p class="comment">文件路径：通过Context.getExternalFilesDir()方法可以获取到 SDCard/Android/data/你的应用的包名/files/ 目录，一般放一些长时间保存的数据</p>
                        <ul>
                            <li class="list-msg">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                <span class="glyphicon-class">2</span>
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                <span class="glyphicon-class">0</span>
                            </li>
                            <li class="update_time">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                <span class="glyphicon-class">1小时前</span>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="comment_list">
                    <a href="">
                        <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="img">
                    </a>
                    <div class="comment_rightBox">
                        <a href="#" class="user_name">开源中国</a>
                        <p class="comment">文件路径：通过Context.getExternalFilesDir()方法可以获取到 SDCard/Android/data/你的应用的包名/files/ 目录，一般放一些长时间保存的数据</p>
                        <ul>
                            <li class="list-msg">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                                <span class="glyphicon-class">2</span>
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                <span class="glyphicon-class">0</span>
                            </li>
                            <li class="update_time">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                <span class="glyphicon-class">1小时前</span>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--底部栏-->
<div style="height: 80px"></div>
<section class="footer">
    <div class="container" >
        <div class="col-md-4">
            <p style="margin-top: 30px;font-size: 20px;color: white">E客网，程序员必备求职神器</p>
            <p>QQ群：169195721</p>
            <p>微 信：www_nowcoder_com
                <input type="button" class="btn-primary footer_btn" value="关注">
            </p>
            <p>微 博：E客网
                <input type="button" class="btn-primary footer_btn" value="关注">
            </p>
        </div>
        <div class="col-md-4">
            <img class="v_code" src="https://uploadfiles.nowcoder.com/app/app_download.png" alt="">
            <p class="scan">扫一扫，把题目装进口袋</p>
        </div>
        <div class="col-md-4">
            <div class="main_link">
                <ul class="link_list">
                    <li>关于我们</li>
                    <li>加入我们</li>
                    <li>意见反馈</li>
                    <li>企业服务</li>
                    <li>网站合作</li>
                    <li>免责声明</li>
                    <li>友情链接</li>
                </ul>
                <p style="clear: both;padding-top: 20px">浙ICP备14000860号-2</p>
                <p> 京公网安备 110114020100785</p>
                <p>E客网©2017 All Rights Reserved</p>
            </div>
        </div>
    </div>

</section>
<script src="_PUBLIC_/static/library/bootstrap/js/bootstrap.min.js"></script>
<script src="_PUBLIC_/static/index/js/home.js" type="text/javascript"></script>
</body>
</html>

<!--请在你写的html末尾加上下面这个script,并且修改响应的id-->
<script>
    //导航栏的选中显示，请修改下面的这行代码，在自己负责的页面部分，写入响应的id
    $('#home').addClass("active");
</script>