<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\wamp64\www\niuke\public/../application/index\view\user_manage\register.html";i:1514528517;}*/ ?>
<html>
	<head>
		<style>
			.box {
				margin:auto;
			}
			
			form {
				line-height:50px;
				height:200px;
				width:300px;
				margin:auto;
			}
			
			#show {
				line-height:50px;
				height:100px;
				width:100px;
				margin:auto;
			}
		</style>
	</head>
	<div class = "box">
	<form action = "<?php echo url('doRegister'); ?>" onsubmit="return check()" enctype="multipart/form-data" method="post">
		<img  id="show"/>
		<input type="file" name="avatar" id="avatar" onchange="avatarChange()" /> <br> 
		<div>
			<label>用户名</label>
			<input type = "text" name = "user_name" id = "user_name"></input>
		</div>
		<div>
			<label>密码</label>
			<input type = "text" name = "user_pwd" id = "pwd"></input>
		</div>
		<div>
			<label>重复密码</label>
			<input type = "text" name = "user_repwd" id = "repwd"></input>
		</div>
		<div>
			<label>验证码</label>
			<div><img class="yzm_img" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src=this.src+'?'+Math.random()" /></div>
			<label>输入验证码</label>
			<input type = "text" name = "yzm"></input>
		</div>
		<button type = "submit">注册</button>
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
</html>
