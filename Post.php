<?php 

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 接收 POST 代码区 //----------------------- // //

    $Sender = $_POST["Sender"];//发送消息的QQ号码
    $Message = $_POST["Message"];//发送的消息
    $Nick = $_POST["Nick"];//QQ昵称
    $Event = $_POST["Event"];//事件类型
    $Qunid = $_POST["ClusterNum"];//群号码
    $QunName = $_POST["ClusterName"];//群名称
    $ApiPort = $_POST["ApiPort"];
    $RobotQQ = $_POST["RobotQQ"];
    $SendTime = $_POST["SendTime"];//收到消息事件的时间戳
    $Version = $_POST["Version"];//机器人客户端版本号
    $CCopyright = $_POST["Copyright"];//接口密匙

    $Message = trim(str_replace($yuan,$huan,$Message));//将小尾巴替换掉，此版本依然使用替换的方法
?>