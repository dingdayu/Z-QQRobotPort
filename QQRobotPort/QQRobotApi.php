<?php

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // 机器人Api操作区 //----------------------- // //

	if(in_array($Sender,$Adminqq)){ 		//需要验证的命令
		if(in_array($Message,$Api_ResetRobot)){  	//重启机器人命令
			echo RobotApiSend('ResetRobot');
			exit;
		}
	
		if(in_array($Message,$Api_LoginRobot)){  	//登陆机器人命令
			echo RobotApiSend('LoginRobot');
			exit;
		}
	
		if(in_array($Message,$Api_ExitRobot)){  	//退出机器人命令
			echo RobotApiSend('ExitRobot');
			exit;
		}
	
		if(in_array($Message,$Api_Friend_K)){  		//开启好友回复
			echo RobotApiSend('Friend','','1');
			exit;
		}
	
		if(in_array($Message,$Api_Friend_G)){  		//关闭好友回复
			echo RobotApiSend('Friend','','0');
			exit;
		}
	
		if(in_array($Message,$Api_Cluster_K)){  		//开启群回复
			echo RobotApiSend('Cluster','','1');
			exit;
		}
	
		if(in_array($Message,$Api_Cluster_G)){  		//关闭群回复
			echo RobotApiSend('Cluster','','0');
			exit;
		}
		
		if(in_array($Message,$Get_GetQunList)){				//获取所有群命令
        		echo GetQunList();
        		exit;
		}
	
		if(in_array($Message,$Get_GetFriendList)){  		//获取所有好友命令
			echo RobotApiSend('GetFriendList');
			exit;
		}
        
		/*		
        if(stristr($Message,"add ")){  		//获取所有好友命令
            $Message = str_replace("add ","",$Message);
			echo RobotApiSend('AddFriend',$Message);
			exit;
		}
		*/
	
	}
	
	/*以下不限制管理员QQ的命令！*/
	
		
	if(in_array($Message,$Api_LoginStatus)){ 	//返回当前登录状态
		echo RobotApiSend('LoginStatu');
		exit;
	}
	
	if($Event == 'ReceiveKickOut'){					
		$str = file_get_contents("http://".$QQRobotIp.":".$ApiPort."/Api?Key=".$Copyright."&SendType=ResetRobot");
    }
