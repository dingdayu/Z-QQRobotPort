<?php

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 接口猪文档 //----------------------- // //

@date_default_timezone_set('PRC');

if($_SERVER['REQUEST_METHOD'] == "POST"){
	include "Function.php";
	include "Config.php";
	include "Post.php";
   
	/*
	//验证身份
	if(is_array($Robotqq)){
		if(in_array($RobotQQ,$Robotqq)){
			echo "验证失败！您无权使用该接口！";
			exit;
		}
	}
	
	if($Copyright != null)
	{
		if($Copyright!=$CCopyright){
			echo "验证失败！您无权使用该接口！";
			exit;
		}
	}
	*/
	/*引入各种事件*/
	include "Even.php";
	include "Huifu.php";
	include "Face.php";    
	include "Api.php";
	
	/*判断是否可以使用QQRobotApi*/
	if($QQRobotIp != null){
		include "QQRobotApi.php";
	}

	if($i_kg == 1){
		include "i.php";
	}
}else{
	echo "接口错误！不可用使用浏览器浏览，如需使用请与管理员联系！" ;
	exit;
}
