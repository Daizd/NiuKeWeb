<?php
//在这里初始化数据库
//注意mysql_xxx已经过时,用mysqli_xxxx代替
define("DB_HOST_M", "localhost");//数据库的地址
define("DB_USER_NAME_M", "root");//数据库用户名
define("DB_USER_PWD_M", "");//数据库用户密码
define("DB_NAME_M", "niu_ke_db");//数据库
define("TABLE_USER_M", "niu_ke_user");//用户表，表要带前缀niu_ke_
define("TABLE_POST_M", "niu_ke_post");//帖子表，
define("TABLE_POST_CATEGORY_M", "niu_ke_post_category");//帖子类别表，
define("TABLE_COURSE_M", "niu_ke_course");//课程类别表，
define("TABLE_QUESTION_BANK_M", "niu_ke_question_bank");
define("TABLE_DIRECTION_M", "niu_ke_direction");
define("TABLE_COMPANY_M", "niu_ke_company");

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
			user_motto varchar(100),
			avatar varchar(50)
		)";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_USER_M ." 创建成功<br/>";
		} else {
			echo "创建数据表". TABLE_USER_M ."错误: " . mysqli_error($con ."<br/>"); 
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_USER_M. "(user_name, user_pwd, user_motto) VALUE('test', '123', '程序员不打代码')" );
		if (!$result){
			die (TABLE_USER_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
	}


	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_COURSE_M."'");
	/* 自己的表先判断是否存在，不在则创建,并插入数据 */
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_COURSE_M .
		"(
			c_id int PRIMARY KEY AUTO_INCREMENT,
			course_name varchar(20) NOT NULL,
			course_teacher varchar(20),
			course_thumb varchar(255),
			course_content varchar(255),
			c_create_time int(11)
		)";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_COURSE_M ." 创建成功<br/>";
		} else {
			echo "创建数据表". TABLE_COURSE_M ."错误: " . mysqli_error($con)."<br/>";  
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_COURSE_M. "(course_name, course_teacher,course_thumb, course_content, c_create_time) 
		VALUE('java', 'TOM','20180104/bae984068da2456c0b4e0f7928ffb19f.jpg','java从入门到放弃', 2017)" );
		if (!$result){
			die (TABLE_COURSE_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
        $result = mysqli_query($con, "INSERT INTO " .TABLE_COURSE_M. "(course_name, course_teacher,course_thumb, course_content, c_create_time) VALUE('c++', 'KITTY','20180104/311f5726784f724e19cddef282149521.jpg','c++从入门到转行',2017)" );
        if (!$result){
			die (TABLE_COURSE_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_COURSE_M. "(course_name, course_teacher,course_thumb, course_content, c_create_time) VALUE('php', 'TONY','20180104/5756b8d73d5899abdc72d6e4d3c7208a.jpg','php从入门到脱发',2017)" );
		if (!$result){
			die (TABLE_COURSE_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
		

		
	}



	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_POST_CATEGORY_M."'");
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_POST_CATEGORY_M .
		"(
			cat_id int PRIMARY KEY AUTO_INCREMENT,
			cat_name varchar(20)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_POST_CATEGORY_M ." 创建成功<br/>";
		} else {
			echo "创建数据表". TABLE_POST_CATEGORY_M ."错误: " . mysqli_error($con)."<br/>"; 
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_POST_CATEGORY_M. "(cat_name) VALUE('求助')" );
		if (!$result){
			die (TABLE_POST_CATEGORY_M."表数据插入失败!  ". mysqli_error($con)."<br/>");
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_POST_CATEGORY_M. "(cat_name) VALUE('讨论')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_POST_CATEGORY_M. "(cat_name) VALUE('面经')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_POST_CATEGORY_M. "(cat_name) VALUE('求职')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_POST_CATEGORY_M. "(cat_name) VALUE('招聘')" );
	}
	
	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_POST_M."'");
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_POST_M .
		"(
			post_id int PRIMARY KEY AUTO_INCREMENT,
			post_title varchar(50) NOT NULL,
			post_content varchar(255),
			post_heat int,
			post_cat_id int,
			create_time int(11),
			foreign key(post_cat_id) references niu_ke_post_category(cat_id)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_POST_M ." 创建成功<br/>";
		} else {
			echo "创建数据表". TABLE_POST_M ."错误: " . mysqli_error($con)."<br/>"; 
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('广州大学的学生竟然..', '广州大学的学生竟然都不打游戏', 1, 1, 123)" );
		if (!$result){
			die (TABLE_POST_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('正式发布 Android 架构组件 1.0 稳定版 | 附带中文介绍视频', '几十亿的设备都在用 Android 系统，从高端手机到飞机上的影音娱乐系统，应有尽有，不一而足。而 Android OS 则为这几十亿的设备保驾护航，高效管理资源，保障运行流畅，然而有时候却增加了开发卓越 App 的难度。为了简化开发流程，我们在 Google ', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('仿写Social Steps的ToolBar效果', '广州大学的学生竟然都不打游戏', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('调用系统相机、相册、剪裁图片并上传（常用于上传头像，兼容Android7.0）', '前段时间在medium上看到一篇比较有意思的文章 Toolbar Delight 。该篇文章讲解了如何实现下面这种效果： gif效果不好，想看清晰的版本请看原始文章的视频。 文章虽好，但是代码不全，有些细节作者其实也没有透露。于是我大致看了之后决定自己实现', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('设置点击效果foreground..', 'Hansion的博客 由于在Android采用了StrictMode API政策禁，其中有一条限制就是对目录访问的限制。 这项变更意味着我们无法通过File API访问手机存储上的数据，也就是说，给其他应用传递 file:// URI 类型的Uri，可能会导致接受者无法访问该路径，并且会', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('相机、相册、剪裁图片并上传..', 'android:foreground 最近一段时间研究了一下 plaid ，想学习一下material design。 这里记录一下view的 background 和 foreground 。 平时的话我们设置点击效果，为了简便，大多数人应该都会使用 android:background=\"@drawable/selecterDrawable\"//或', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('Constraint Layout 1.1.x带来了哪些新东西？..', '今年的 Google I/O 上谷歌发布了新版本的ConstraintLayout，但是我们并没有从中得到多少信息，只有一篇非常简陋的 博客 。 那么到底是哪些新特性，它们的功能和用法又是怎么回事呢？ Percent Dimensions 说到Percent Dimensions就不得不说', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('ConstraintLayout之Barrier..', '加快apk的构建速度，如何把编译时间从130秒降到17秒(二)在上一篇文章 加快apk的构建速度，如何把编译时间从130秒降到17秒 中讲了优化的思路与初步的实现，经过一段时间的优化性能和稳定性都有很大的提高，这里要感谢大家提的建议以及 github 上的 issue ，这篇文章就把主要优化的点和新功能以及填的坑介', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('从概念设计到安卓实现, 第二部分（译）..', '自从上一篇文章发布之后已经有一段时日了，虽然期间经历了很多事情，但是最终还是来了，希望你们依旧喜欢！ 这是我的“从设计到android”系列的新篇，如果你记得这个系列的 第一部分 ，就应该知道当时我选了一个有趣的概念设计，并尝试在Android 上', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('高仿掘金App —— 基于 databinding..', '项目初衷 不同于前端 vue、 react 的火热, 移动端的 databinding 好像不受待见。鉴于 vue、 react 都有各自成熟的生态圈，我希望通过这个项目打磨出一个简单易用的 databinding 组件库 。 1.1 ', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('Android Paging Library按页获取网络数据实例..', '新的 Paging Library 成为了 Architecture Components 的一部分。虽然现在还是alpha阶段，但是无疑你已经开始准备尝试了！我不准备全去讲它的用法，因为本文只是对 Chris Craik 这篇文章 的补充。 因为官方的示例第一眼看上去好像它只能跟 Room 一起', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('为什么要使用ItemDecoration系列之不要添加view来做分割线..', '首先，什么是ItemDecoration？来看看官网是如何解释的。 An ItemDecoration allows the application to add a special drawing and layout offset to specific item views from the adapter’s data set. This can be useful for drawing dividers between i', 1, 1, 123)" );
        mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
		VALUE('《Effective Java》可能在哪些方面影响了 Kotlin 的设计？..', '在重读《Effective Java》时，我发现其中的很多内容对Kotlin来说已经用不着了，所以产生了一个想法，想探讨一下这本书是否影响了Kotlin的设计。', 1, 1, 123)" );
        for ($i=0; $i<100; $i++) {
            $n = ($i)%5+1;
            mysqli_query($con, "INSERT INTO " .TABLE_POST_M. "(post_title, post_content, post_heat, post_cat_id, create_time) 
				VALUE('Effective Java', '【Android】非 recreate() 形式的夜间模式实现（自由切换，不改变任何状态，不重新初始化整个activity）', 1, " .$n. ", " .time(). ")");
        }
    }

	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_QUESTION_BANK_M."'");
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_QUESTION_BANK_M .
		"(
			id int PRIMARY KEY AUTO_INCREMENT,
			direction varchar(255) ,
			company varchar(255),
			date int,
			hot int,
			number int,
			description varchar(255),
			question_content varchar(255)
			
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_QUESTION_BANK_M ." 创建成功<br/>";
		} else {
			echo "创建数据表". TABLE_QUESTION_BANK_M ."错误: " . mysqli_error($con)."<br/>"; 
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number,description) 
		VALUE('前端', '腾讯', 2017, 183,15,'腾讯2017校招前端笔试题')" );
		if (!$result){
			die (TABLE_QUESTION_BANK_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('后端', '腾讯', 2017,120,25, '腾讯2017校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('后端', '微软', 2017,1203,14, '微软2017校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('后端', '迅雷', 2017, 123,17,'迅雷2017校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('后端', 'YY', 2017,120,14, 'YY2017校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('后端', '腾讯', 2016,13,18, '腾讯2017校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('后端', '微软', 2016,120,19, '微软2016校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('后端', '迅雷', 2016, 253,15,'迅雷2016校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('后端', 'YY', 2016,1230,15, 'YY2016校招后端笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number,description) 
		VALUE('java', '腾讯', 2017,1673,18, '腾讯2017校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('java', '微软', 2017,123,15, '微软2017校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('java', '迅雷', 2017,103,20, '迅雷2017校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('java', 'YY', 2017, 123,15,'YY2017校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number,description) 
		VALUE('java', '腾讯', 2016,193,19, '腾讯2016校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('java', '微软', 2016,13,25, '微软2016校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('java', '迅雷', 2016,100,15, '迅雷2016校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('java', 'YY', 2016,223,9, 'YY2017校招java笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('测试', '腾讯', 2017,12,15, '腾讯2017校招测试笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number,description) 
		VALUE('测试', '微软', 2017, 1213,15,'微软2017校招测试笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('测试', '迅雷', 2017,1223,15, '迅雷2017校招测试笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number,description) 
		VALUE('测试', 'YY', 2017, 123,18,'YY2017校招测试笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('测试', '腾讯', 2016,13,15, '腾讯2016校招测试笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('测试', '微软', 2016, 23,15,'微软2016校招测试笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date, hot,number, description) 
		VALUE('测试', '迅雷', 2016, 193,10,'迅雷2016校招测试笔试题')" );
		$result = mysqli_query($con, "INSERT INTO " .TABLE_QUESTION_BANK_M. "(direction, company, date,  hot,number,description) 
		VALUE('测试', 'YY', 2016, 123,12,'YY2016校招测试笔试题')" );
	}
	
	
	
	$result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_COMPANY_M."'");
	if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_COMPANY_M .
		"(
			id int PRIMARY KEY AUTO_INCREMENT,
			name varchar(255)
			
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_COMPANY_M ." 创建成功<br/>";
		} else {
			echo "创建数据表". TABLE_COMPANY_M ."错误: " . mysqli_error($con)."<br/>"; 
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_COMPANY_M. "(name) 
		VALUE( '腾讯')" );
		if (!$result){
			die (TABLE_COMPANY_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
	    $result = mysqli_query($con, "INSERT INTO " .TABLE_COMPANY_M. "(name) 
		VALUE( '迅雷')" );
		if (!$result){
			die (TABLE_COMPANY_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
         $result = mysqli_query($con, "INSERT INTO " .TABLE_COMPANY_M. "(name) 
		VALUE( 'YY')" );
		if (!$result){
			die (TABLE_COMPANY_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_COMPANY_M. "(name) 
		VALUE( '微软')" );
		if (!$result){
			die (TABLE_COMPANY_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
}
        
	   $result = mysqli_query($con, "SHOW TABLES LIKE '". TABLE_DIRECTION_M."'");
	   if (mysqli_num_rows($result) == 0){
		$sql = "CREATE TABLE " . TABLE_DIRECTION_M .
		"(
			id int PRIMARY KEY AUTO_INCREMENT,
		    name  varchar(255)
			
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
		if (mysqli_query($con, $sql)){
			echo "数据表 ". TABLE_DIRECTION_M ." 创建成功<br/>";
		} else {
			echo "创建数据表". TABLE_DIRECTION_M ."错误: " . mysqli_error($con)."<br/>"; 
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_DIRECTION_M. "(name) 
		VALUE('前端')" );
		if (!$result){
			die (TABLE_DIRECTION_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_DIRECTION_M. "(name) 
		VALUE('后端')" );
		if (!$result){
			die (TABLE_DIRECTION_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_DIRECTION_M. "(name) 
		VALUE('Java')" );
		if (!$result){
			die (TABLE_DIRECTION_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
		$result = mysqli_query($con, "INSERT INTO " .TABLE_DIRECTION_M. "(name) 
		VALUE('测试')" );
		if (!$result){
			die (TABLE_DIRECTION_M."表数据插入失败! ". mysqli_error($con)."<br/>");
		}
}
	

	mysqli_close($con);
}
?>