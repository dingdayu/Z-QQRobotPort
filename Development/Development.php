<?php

	exit("SAE下无法使用此文档！");
	
    $Sender = trim(isset($_POST["Sender"])?$_POST["Sender"]:'');//发送消息的QQ号码
    $Message = trim(isset($_POST["Message"])?$_POST["Message"]:'');//发送的消息
    $Nick = trim(isset($_POST["Nick"])?$_POST["Nick"]:'');//QQ昵称
    $Event = trim(isset($_POST["Event"])?$_POST["Event"]:'');//事件类型
    $Qunid = trim(isset($_POST["ClusterNum"])?$_POST["ClusterNum"]:'');//群号码
    $QunName = trim(isset($_POST["ClusterName"])?$_POST["ClusterName"]:'');//群名称
    $ApiPort = trim(isset($_POST["ApiPort"])?$_POST["ApiPort"]:'');
    $RobotQQ = trim(isset($_POST["RobotQQ"])?$_POST["RobotQQ"]:'');
    $SendTime = trim(isset($_POST["SendTime"])?$_POST["SendTime"]:'');//收到消息事件的时间戳
    $Version = trim(isset($_POST["Version"])?$_POST["Version"]:'');//机器人客户端版本号
    $CCopyright = trim(isset($_POST["Copyright"])?$_POST["Copyright"]:'');//接口密匙
	
	$txt = fopen("Development_Test.txt","a") ;
	fwrite($txt,"\r\nSender:\t\t".$Sender."\r\nMessage:\t".$Message."\r\nNick:\t\t".$Nick."\r\nEvent:\t\t".$Event."\r\nClusterNum:\t".$Qunid."\r\nClusterName:\t".$QunName."\r\nApiPort:\t".$ApiPort."\r\nRobotQQ:\t".$RobotQQ."\r\nSendTime:\t".$SendTime."\r\nVersion:\t".$Version."\r\nCopyright:\t".$CCopyright."\r\n----------------------------\r\n");