<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//在这里初始化数据库
//注意mysql_xxx已经过时,用mysqli_xxxx代替
define("DB_HOST", "localhost");//数据库的地址
define("DB_USER_NAME", "root");//数据库用户名
define("DB_USER_PWD", "");//数据库用户密码
define("DB_NAME", "niu_ke_db");//数据库
define("TABLE_USER", "user_info");//用户表

function initDB(){
	$con = mysqli_connect(DB_HOST, DB_USER_NAME, DB_USER_PWD); 
	if (mysqli_connect_errno($con)) 
	{ 
		die ("连接 MySQL 失败: " . mysqli_connect_error()); 
	}


	/* 数据库不存在则创建 */
	mysqli_query($con, "CREATE DATABASE IF NOT EXISTS " . DB_NAME);

	$con = mysqli_connect(DB_HOST, DB_USER_NAME, DB_USER_PWD, DB_NAME); 
	if (mysqli_connect_errno($con)) 
	{ 
		die ("连接 MySQL 失败: " . mysqli_connect_error()); 
	}
	

	/* 
	Dzd  在自己的代码块上写上自己的名字注释
	*/
	
 
	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_USER."'");
	/* 自己的表先判断是否存在，不在则创建,并插入数据 */
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_USER .
		"(
			UId int PRIMARY KEY AUTO_INCREMENT,
			UserName varchar(20) NOT NULL,
			UserPwd varchar(20)
		)";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_USER ." 创建成功";
		} else {
			echo "创建数据表错误: " . mysqli_error($con); 
		}
		mysqli_query($con, "INSERT INTO " .TABLE_USER. "(UserName, UserPwd) VALUE('test', '123')" );
	}





	mysqli_close($con);
}
