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

	/*QQ在线状态
	if(stristr($Message,"@qq ")){
		$Message = str_replace("@qq ","",$Message);
		echo Api_c('online',$Message);
		exit;
	}
	*/
	
	/*手机归属地*/
	if(stristr($Message,"@pn ")){
		$Message = str_replace("@pn ","",$Message);
		echo Api_c('pn',$Message);
		exit;
	}
	
	/*URL转换*/
	if(stristr($Message,"@urlen ")){
		$Message = str_replace("@urlen ","",$Message);
		echo Api_c('urlen',$Message);
		exit;
	}
	
	/*拼音转换*/
	if(stristr($Message,"@py ")){
		$Message = str_replace("@py ","",$Message);
		echo Api_c('pinyi',$Message);
		exit;
	}
	
	/*QQ在线人数*/
	if(stristr($Message,"@qq ")){
		$Message = str_replace("@online ","",$Message);
		echo Api_c('online');
		exit;
	}
	
	/*身份证信息查询
	if(stristr($Message,"@id ")){
		$Message = str_replace("@id ","",$Message);
		echo Api_c('id',$Message);
		exit;
	}
	*/
	
	/*软件搜索*/
	if(stristr($Message,"@rj ")){
		$Message = str_replace("@rj ","",$Message);
		echo Api_c('software',$Message);
		exit;
	}
	
    /*翻译*/
	if(stristr($Message,"@fy ")){
		$Message = str_replace("@fy ","",$Message);
		echo Api_c('fanyi',$Message);
		exit;
	}
	
	/*ip查询*/
	if(stristr($Message,"@ip ")){
		$Message = str_replace("@ip ","",$Message);
		echo Api_c('ip',$Message);
		exit;
	}
	
	/*查询即时时间*/
	if(in_array($Message,$time)){
		echo Api_c('time');
		exit;
	}

	/*ip查询*/
	if(stristr($Message,"@weather ")){
		$Message = str_replace("@weather ","",$Message);
		echo Api_c('weather',$Message);
		exit;
	}

	/*仙国大帝*/
	if($Message=='仙国大帝'){
		echo Api_c('xianguo');
		exit;
	} 
