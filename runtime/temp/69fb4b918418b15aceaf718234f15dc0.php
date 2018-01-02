<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"D:\wamp64\www\niuke\public/../application/index\view\index\home.html";i:1514688646;s:54:"D:\wamp64\www\niuke\application\index\view\header.html";i:1514605701;s:54:"D:\wamp64\www\niuke\application\index\view\footer.html";i:1514621682;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>猪客网</title>
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
                <a class="navbar-brand icon" href="#">泡在云上的日子</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-6">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">首页</a></li>
                    <li><a href="#">题库</a></li>
                    <li><a href="#">课程</a></li>
                    <li><a href="#">求职</a></li>
                    <li><a href="#">IT</a></li>
                    <li><a href="#">讨论区</a></li>
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
                    <li class="no_login">
                        <ul class="ul_bar">
                            <li>
                                <a href="#">登陆</a>
                            </li>
                            <li>
                                <a href="#">注册</a>
                            </li>
                        </ul>
                    </li>
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
            <li class="class_li">
                <a href="" class="a_div">
                    <img src="https://img1.mukewang.com/szimg/5a16336900014ca405400300.jpg" alt="" class="class_img">
                    <p class="class_description">Java企业级电商项目架构演进之路  Tomcat集群与Redis分布式</p>
                </a>
            </li>
        </ul>
    </div>
</div>


<!--底部栏-->
<section class="footer">
    <div class="container" >
        <div class="col-md-4">
            <p style="margin-top: 30px;font-size: 20px;color: white">猪客网，程序员必备求职神器</p>
            <p>QQ群：169195721</p>
            <p>微 信：www_nowcoder_com
                <input type="button" class="btn-primary footer_btn" value="关注">
            </p>
            <p>微 博：猪客网
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
                <p>牛客网©2017 All Rights Reserved</p>
            </div>
        </div>
    </div>

</section>
<script src="_PUBLIC_/static/library/bootstrap/js/bootstrap.min.js"></script>
<script src="_PUBLIC_/static/index/js/home.js" type="text/javascript"></script>
</body>
</html>