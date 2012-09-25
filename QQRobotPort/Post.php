<?php 

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 接收 POST 代码区 //----------------------- // //

    $Sender = trim(isset($_POST["Sender"])?$_POST["Sender"]:'');//发送消息的QQ号码
    $Message = trim(isset($_POST["Message"])?$_POST["Message"]:'');//发送的消息
    $Nick = trim(isset($_POST["Nick"])?$_POST["Nick"]:'');//QQ昵称
    $Event = trim(isset($_POST["Event"])?$_POST["Event"]:'');//事件类型
    $Qunid = trim(isset($_POST["ClusterNum"])?$_POST["ClusterNum"]:'');//群号码
    $QunName = trim(isset($_POST["ClusterName"])?$_POST["ClusterName"]:'');//群名称
    $ApiPort = trim(isset($_POST["ApiPort"])?$_POST["ApiPort"]:'');//机器人API端口
    $RobotQQ = trim(isset($_POST["RobotQQ"])?$_POST["RobotQQ"]:'');//机器人QQ号码
    $SendTime = trim(isset($_POST["SendTime"])?$_POST["SendTime"]:'');//收到消息事件的时间戳
    $Version = trim(isset($_POST["Version"])?$_POST["Version"]:'');//机器人客户端版本号
    $CCopyright = trim(isset($_POST["Copyright"])?$_POST["Copyright"]:'');//接口密匙

    $Message = str_replace($yuan,$huan,trim($Message));//将小尾巴替换掉，此版本依然使用替换的方法
