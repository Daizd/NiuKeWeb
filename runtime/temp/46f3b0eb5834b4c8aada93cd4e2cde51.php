<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\wamp64\www\niuke\public/../application/index\view\user_manage\login.html";i:1514989418;s:37:"../application/index/view/header.html";i:1514996938;s:37:"../application/index/view/footer.html";i:1514962838;}*/ ?>
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
                                <li id="logout"><i class="fa fa-envelope" aria-hidden="true" style=""></i>&nbsp;&nbsp;退出登陆</li>
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
<script type="text/javascript">
    $('#logout').click(function () {
        console.log("点击了退出登陆");
        window.location.href = "../user_manage/login";
    })
</script>
	<div class = "box" style="margin: 0 auto;margin-top: 50px;margin-bottom: 50px;width:400px;">
		<form action="<?php echo url('doLogin'); ?>" class="form" onsubmit="return check()" 
			style="width:400px">
			<div class="form-group">
				<label >用户名</label>
				<input type="text" class="form-control" name="user_name" style="background-color:white;">
			</div>
			<div class="form-group">
				<label >密码</label>
				<input type="password" class="form-control pwd" name="user_pwd" >
			</div>
	
			<div class="form-group">
				<input type="submit" class="btn btn-success"  value="登录">
			</div>

		</form>
	</div>
	<script type="text/javascript">
		function check() {
			var uname = $('[name="user_name"]').val()
			var pwd = $('.pwd').val()
			// alert(pwd)
			if (pwd == '' || uname=='') {
				alert('信息不完整')
				return false
			}
			else{
				return true;
			}
		}
	</script>

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