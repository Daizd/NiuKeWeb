<?php
//在这里初始化数据库
//注意mysql_xxx已经过时,用mysqli_xxxx代替
define("DB_HOST_M", "localhost");//数据库的地址
define("DB_USER_NAME_M", "root");//数据库用户名
define("DB_USER_PWD_M", "");//数据库用户密码
define("DB_NAME_M", "niu_ke_db");//数据库
define("TABLE_USER_M", "niu_ke_user");//用户表，表要带前缀niu_ke_
define("TABLE_POST_M", "niu_ke_post");

function initDB_M(){
	$con = mysqli_connect(DB_HOST_M, DB_USER_NAME_M, DB_USER_PWD_M); 
	if (mysqli_connect_errno($con)) 
	{ 
		die ("连接 MySQL 失败: " . mysqli_connect_error()); 
	}


	/* 数据库不存在则创建 */
	mysqli_query($con, "CREATE DATABASE IF NOT EXISTS " . DB_NAME_M . " 
	DEFAULT CHARSET utf8 COLLATE utf8_general_ci");

	$con = mysqli_connect(DB_HOST_M, DB_USER_NAME_M, DB_USER_PWD_M, DB_NAME_M); 
	$con->query("SET NAMES 'utf8'");//写库utf8
	if (mysqli_connect_errno($con)) 
	{ 
		die ("连接 MySQL 失败: " . mysqli_connect_error()); 
	}
	

	/* 
	Dzd  在自己的代码块上写上自己的名字注释
	*/
	
    /*
		niu_ke_user :
			u_id
			user_name 用户名
			user_pwd	密码
			avatar	头像路径
	*/
	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_USER_M."'");
	/* 自己的表先判断是否存在，不在则创建,并插入数据 */
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_USER_M .
		"(
			u_id int PRIMARY KEY AUTO_INCREMENT,
			user_name varchar(20) NOT NULL,
			user_pwd varchar(20),
			avatar varchar(50)
		)";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_USER_M ." 创建成功";
		} else {
			echo "创建数据表错误: " . mysqli_error($con); 
		}
		mysqli_query($con, "INSERT INTO " .TABLE_USER_M. "(user_name, user_pwd) VALUE('test', '123')" );
	}


	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_POST_M."'");
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_POST_M .
		"(
			post_id int PRIMARY KEY AUTO_INCREMENT,
			post_title varchar(50) NOT NULL,
			post_content varchar(255),
			post_column varchar(255),
			create_time int(11)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_POST_M ." 创建成功";
		} else {
			echo "创建数据表错误: " . mysqli_error($con); 
		}
		mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_column, create_time) 
		VALUE('广州大学的学生竟然..', '广州大学的学生竟然都不打游戏', '吹水', 123)" );
	}

	mysqli_close($con);
}
?>