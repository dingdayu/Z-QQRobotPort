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
