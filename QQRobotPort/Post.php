<?php 

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 接收 POST 代码区 //----------------------- // //

    $Sender = trim($_POST["Sender"]);//发送消息的QQ号码
    $Message = trim($_POST["Message"]);//发送的消息
    $Nick = trim($_POST["Nick"]);//QQ昵称
    $Event = trim($_POST["Event"]);//事件类型
    $Qunid = trim($_POST["ClusterNum"]);//群号码
    $QunName = trim($_POST["ClusterName"]);//群名称
    $ApiPort = trim($_POST["ApiPort"]);
    $RobotQQ = trim($_POST["RobotQQ"]);
    $SendTime = trim($_POST["SendTime"]);//收到消息事件的时间戳
    $Version = trim($_POST["Version"]);//机器人客户端版本号
    $CCopyright = trim($_POST["Copyright"]);//接口密匙

    $Message = str_replace($yuan,$huan,trim($Message));//将小尾巴替换掉，此版本依然使用替换的方法
