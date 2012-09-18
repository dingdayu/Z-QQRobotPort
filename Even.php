<?php

// +----------------------------------------------------------------------
// | Z-Robot 接口
// +----------------------------------------------------------------------
// | Copyright (c) 2012 http://api.dingxiaoyu.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: xiaoyu <614422099@qq.com>
// +----------------------------------------------------------------------
// //------------------- // Event 事件 区 //----------------------- // //

    if($Event == 'ReceiveAddFriends'){					//有人加机器人为好友
		if(!empty($ReceiveAddFriends)){
			echo str_replace("{Nick}",$Nick,$ReceiveAddFriends);
			exit;
		}
    }elseif($Event == 'ReceiveTempSession'){			//收到临时会话消息
		if(!empty($ReceiveTempSession)){
			echo $ReceiveTempSession;
			exit; 
		}
    }elseif($Event == 'ReceiveVibration'){				//收到弹窗
		if(!empty($ReceiveVibration)){
			echo $ReceiveVibration;
			exit;
		}
    }elseif($Event == 'ReceiveInputState'){				//正在输入事件
		if(!empty($ReceiveInputState)){
			echo str_replace("{Nick}",$Nick,$ReceiveInputState);
			exit; 
		}
    }elseif($Event == 'AddClusterSucceed'){  			//机器人加入群成功
		if(!empty($AddClusterSucceed)){
			echo $AddClusterSucceed;
			exit;
		}
    }elseif($Event == 'ReceiveSignatureChanged'){   	//签名更改
		if(!empty($ReceiveSignatureChanged)){
			echo str_replace("{Nick}",$Nick,$ReceiveSignatureChanged);
			exit;
		}
    }elseif($Event == 'ReceiveNewMemberAdd'){ 	 		//新成员加群
		if(!empty($ReceiveNewMemberAdd)){
			echo str_replace(array("{Nick}","{QunName}"),array($Nick,$QunName),$ReceiveNewMemberAdd);
			exit;
		}
    }elseif($Event == 'RemovedFromCluster'){   			//有成员被T出群
		if(!empty($RemovedFromCluster)){
			preg_match("/群：(.*?)\[(.*?)\]的成员:(.*?)\[(.*?)\]退出该群/i", $Message, $tqts);
			echo str_replace(array("{Nick}","{qq}"),array($tqts[4],$tqts[3]),$RemovedFromCluster);
			exit;  
		}
    }elseif($Event == 'MemberCardChanged'){   			//有成员更改群名片
		if(!empty($MemberCardChanged)){
			echo str_replace("{Nick}",$Nick,$MemberCardChanged);
			exit;   
		}
    }
?>