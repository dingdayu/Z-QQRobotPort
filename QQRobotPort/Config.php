<?php 

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 配置文件 //----------------------- // //

	/***********API设置***********/	
	$Api_Url = 'http://api.dingxiaoyu.com/Api/';
	$XY_Use = 'test';
	$XY_Key = 'test';

	/**********参数设置**********/
	$QQRobotIp = Getip();								//机器人IP
	/*如果您留空无法使用QQRobotApi*/
	$Copyright = '1234';											//密钥
	/*注意 QQRobotApi 密钥 ，如果出错则不能使用机器人API，默认不启动机器人限制，启用请到QQRobotPort.php将注释去掉*/
	
	$Robotqq = array('405060911');									//允许使用接口的机器人号吗
	/*默认不启动限制，启用请到QQRobotPort.php将注释去掉，可 array("614422099","2573797666"); 多个机器人号码*/
	$Adminqq = array("153194914","22009117","614422099");			//管理员QQ，可设置多个
	
	
	/********菜单命令设置********/
	$Api_ResetRobot = array('重启机器人');							//重启机器人命令
	$Api_LoginRobot = array('登录机器人');							//登陆机器人命令
	$Api_ExitRobot = array('退出机器人');							//退出机器人命令
	$Api_LoginStatus = array('登录状态');							//返回当前登录状态
	$Api_Friend_K = array('开启好友回复');							//开启好友回复
	$Api_Friend_G = array('关闭好友回复');							//关闭好友回复
	$Api_Cluster_K = array('开启好友回复');							//开启群回复
	$Api_Cluster_G = array('关闭好友回复');							//关闭群回复

	$Get_GetFriendList = array('所有好友');							//获取所有好友命令
	$Get_GetQunList = array('所有群');								//获取所有群命令
	
   
/***********总菜单设置*********/
	$help =  array("帮助","@help","@","@小y","菜单");			//帮助菜单命令
	$time = array("现在几点了","time","时间","现在时间","@time", "@时间","What time is it?","时间","现在时间");//时间菜单命令
	$kuaid = array("快递","kuaidi","快递查询");						//快递查询菜单命令，暂只支持圆通
   
	$joke = array("笑话","讲个笑话","joke","@笑话","@joke","xiaohua","@xh");//笑话菜单命令

/**********菜单回复设置********/
	$help_ab = "[Face13.gif]             您好，我是小y!\r\n-------------你还可以使用如下帮助---------------\r\n@weather          天气查询\r\n@rj               软件搜索\r\n@xh               获得随机笑话\r\n@yt               圆通速递跟踪\r\n@pn               手机归属\r\n@ip               IP信息查询\r\n@time             时间信息查询\r\n@urlen            URL转换\r\n@fy               翻译\r\n@py               拼音转换\r\n------------------------------------------------\r\n以上命令的使用方法均为 命令 + 空格 + 参数\r\n";
	//帮助菜单，用于快捷回复的帮助回复
	
    $kuaidi_ab = "Sorry,暂只开放圆通快递查询服务！\r\n命令：@yt+空格+单号";						//此版本暂时关闭快递功能，您也可以在Api中添加代码，以支持此功能
	//快递菜单，用于快捷回复的快递回复
	
/**********事件回复设置**********/
    $ReceiveAddFriends = "{Nick},你好，很高兴认识你。\r\n(*^__^*) 嘻嘻\r\n直接发送菜单可以获得帮助菜单哦！";
	//有人加机器人为好友
	
    $ReceiveTempSession = "请加我为好友好吗?嘿嘿,不和我交朋友我就不给你玩^_^";
	//收到临时会话消息
	
    $ReceiveVibration = "再抖我吃掉你。。。\r\n(*^__^*) 嘻嘻，有事吗？[Face13.gif]";
	//收到弹窗
	
    $ReceiveInputState = "{Nick}你好！\r\n发送菜单可以获得帮助菜单哦！。[Face109.gif]";
	//正在输入事件
	
    $AddClusterSucceed = "大家好，我是QQ机器人，我会的可多了，在群里你可以直接发送@菜单获得帮助菜单哦！";
	//机器人加入群成功
	
    $ReceiveSignatureChanged = "{Nick}，你签名好个性哦！";
	//签名更改
	
    $ReceiveNewMemberAdd = "新人【{Nick}】你好！欢迎您加入{QunName}，请遵守相关群规定。\r\n如果想要在群内获得帮助请“@菜单”，如果和我私聊可以不用加“@”哦！";
	//新成员加群
	
    $RemovedFromCluster = "{Nick}(QQ:{qq}) 不知道犯了本群啥规定,被踢出了本群! 哎~~~\r\n今后他的人生道路将一片黑暗...悲催~";
	//有成员被T出群
	
    $MemberCardChanged = "{Nick}你又更改了名片吗？嘿嘿，怎么也不告诉我。"; 
	//有成员更改群名片

	/**********小i设置*************/
	$i_kg = 0;											//小i开关，不需要启动命令，在程序的最后启动
	$i_qun_kg = 0;										//小i群开关
	$i_qun_cmd = '@i ';									//群聊天启动小i命令
    $i_name = array("小i","xiao i","我的老板MAX");
    $my_name = array("小y","xiao y","小雨");	

	
/***********替换设置***********/
    $yuan = array("(来自手机QQ: http://mobile.qq.com )",
		"【提示：此用户正在使用Q+ Web：http://web2.qq.com/】",
		"(来自手机QQ2012 [Android]:语音对讲，高效沟通！)",
		"(来自手机QQ2012 [iPhone]:语音对讲，高效沟通！)",
		"(本消息由您的好友通过手机3GQQ发送，体验3GQQ请登录: http://3g.qq.com)",
		"(来自手机QQ2012 [Android]: http://mobile.qq.com )",
		"(来自iPad QQ: http://mobile.qq.com )",
		"(来自QQ HD 平板电脑专用: http://mobile.qq.com )",
		"(来自小霸王学习机:http://xiaobawang.qq.com)",
		"(来自手机QQ2012 [iPhone]: http://mobile.qq.com )",
		"(来自手机QQ2012 [Android]: http://mobile.qq.com )",
		"(来自QQ HD 平板电脑专用: http://mobile.qq.com )",
	);
    $huan = array('','','','','','','','','','','','');
