<?php 


// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 快捷回复区 //----------------------- // //

	if(in_array($Message,$help)){						//帮助命令的快捷回复
        echo $help_ab;
        exit;
    }

	if(in_array($Message,$kuaid)){						//快递的快捷回复
        echo $kuaidi_ab;
        exit;
    }
	
	if(in_array($Message,$Get_GetFriendList)){  		//获取所有好友命令
         echo RobotApiSend('GetFriendList');
         exit;
    }

	if($Message=="接口"){
		echo "本接口作者为：小雨(QQ:614422099)。\r\n接口版本： V1.0 免费版。\r\n官方网站：http://api.dingxiaoyu.com";
		exit;
    }
