<?php 

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // Api代码区 //----------------------- // //


	/*圆通快递*/
	if(stristr($Message,"@yt ")){
		$Message = str_ireplace("@yt ","",$Message);
		echo Api_c('yuantong',$Message);
		exit;
	}

	/*笑话*/
	if(in_array($Message,$joke)){
		echo Api_c('joke');
		exit;
        }

	/*QQ在线状态*/
	if(stristr($Message,"@qq ")){
		$Message = str_replace("@qq ","",$Message);
		echo Api_c('qq_log',$Message);
		exit;
	}
	
	/*手机归属地*/
	if(stristr($Message,"@pn ")){
		$Message = str_replace("@pn ","",$Message);
		echo Api_c('pn',$Message);
		exit;
	}
	
	/*URL转换*/
	if(stristr($Message,"@url_en ")){
		$Message = str_replace("@url_en ","",$Message);
		echo Api_c('url_en',$Message);
		exit;
	}
	
	/*QQ在线人数*/
	if(stristr($Message,"@online ")){
		$Message = str_replace("@online ","",$Message);
		echo Api_c('online');
		exit;
	}
	
	/*身份证信息查询*/
	if(stristr($Message,"@id ")){
		$Message = str_replace("@id ","",$Message);
		echo Api_c('id',$Message);
		exit;
	}
	
	/*软件搜索*/
	if(stristr($Message,"@software ")){
		$Message = str_replace("@software ","",$Message);
		echo Api_c('software',$Message);
		exit;
	}
	
    /*翻译*/
	if(stristr($Message,"@fy ")){
        $Message = str_replace("@fy ","",$Message);
		$entoch = @file_get_contents('http://api.laijingwu.com/?type=microsofttraslate&msg='.urlencode($Message));
		$entoch = str_replace( '>','>'.chr(13),$entoch);
		$entoch = strip_tags($entoch);
		echo $entoch;
		exit;
	}

	/*查询即时时间*/
	if(in_array($Message,$time)){
		echo Api_c('time');
		exit;
	}  
