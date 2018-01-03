<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\wamp64\www\niuke\public/../application/index\view\user_manage\register.html";i:1514978686;s:37:"../application/index/view/header.html";i:1514978686;s:37:"../application/index/view/footer.html";i:1514978686;}*/ ?>
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
                    <li id="course" class="navbar_li"><a href="#">课程</a></li>
                    <li id="job" class="navbar_li"><a href="#">求职</a></li>
                    <li id="it" class="navbar_li"><a href="#">IT</a></li>
                    <li id="forum" class="navbar_li"><a href="<?php echo url('../public/forum/forum/forum'); ?>">讨论区</a></li>
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
                                <a href="<?php echo url('userManage/login'); ?>">登陆</a>
                            </li>
                            <li>
                                <a href="<?php echo url('../public/index/userManage/register'); ?>">注册</a>
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
<div text-align=margin>
	<div class = "box" style="margin: 0 auto;margin-top: 50px;margin-bottom: 50px;width:400px;">
		<form action = "<?php echo url('doRegister'); ?>" onsubmit="return check()" enctype="multipart/form-data" method="post">
			<!-- <div style="text-align:center"> -->
				<!-- <img  id="show" style = "height:100px;width:100px;margin:auto;"/> -->
			<!-- </div> -->
			<div style = "height:100px;width:400px;">
				<img  id="show" style = "height:100px;width:100px;margin:auto;float:right"/>
				<div style = "width:calc(100% - 100px);height:100px;float:left;position:relative;">
					<input type="file" name="avatar" id="avatar" onchange="avatarChange()" 
					style = "position: absolute;bottom: calc(50% - 13px); " />
				</div>
			</div>
			<div class="form-group " style="margin-top: 30px;">
				<label>用户名</label>
				<input type = "text" name = "user_name" id = "user_name" class="form-control"></input>
			</div class="form-group">
			<div class="form-group">
				<label>密码</label>
				<input type = "password" name = "user_pwd" id = "pwd" class="form-control"></input>
			</div class="form-group">
			<div class="form-group">
				<label>重复密码</label>
				<input type = "password" name = "user_repwd" id = "repwd" class="form-control"></input>
			</div>
			<div class="form-group">
				<label>验证码</label>
				<div><img class="yzm_img" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()" /></div>
				<label>输入验证码</label>
				<input type = "text" name = "yzm" class="form-control"></input>
			</div>
			<div style = "text-align:center">
				<button type = "submit" style = "width:30%">注册</button>
			</div>
			
		</form>
		<script type="text/javascript">
			function avatarChange () {
				var r= new FileReader();
				f=document.getElementById('avatar').files[0];
				r.readAsDataURL(f);
				r.onload=function  (e) {
					document.getElementById('show').src=this.result;
				};
			}
			function check() {
				var uname = document.getElementById("user_name").value
				var pwd = document.getElementById("pwd").value
				var repwd = document.getElementById("repwd").value
				if (pwd == '' || uname==' ') {
					alert('信息不完整')
					return false
				}
				else if (pwd != repwd) {
					alert('密码和重复密码不一样！')
					return false;
				}else{
					return true;
				}
			}
		</script>
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
