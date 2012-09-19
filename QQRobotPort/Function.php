<?PHP
	
	function Cur_c($url,$p_g,$msg=''){
		$curl = curl_init();// 初始化一个 cURL 对象
		if($p_g=='POST'){
			curl_setopt($ch,　CURLOPT_POST,　1);//开启POST
			curl_setopt($ch,　CURLOPT_POSTFIELDS,$msg);//POST数据
		}elseif($p_g=='GET'){
			$url = $url.'?'.$msg;
		}
		curl_setopt($curl, CURLOPT_URL,$url);// 设置你需要抓取的URL
		curl_setopt($curl, CURLOPT_HEADER, 0);// 设置header
		curl_setopt($curl, CURLOPT_TIMEOUT, 60);//设置超时时间
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);// 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
		$data = curl_exec($curl);// 运行cURL，请求网页
		curl_close($curl);// 关闭URL请求
		
	return $data;
	}
	
	function Api_c($type,$msg='',$show='txt',$encode='utf8'){
		global $Api_Url,$XY_Key,$XY_Use;
		
		$url = $Api_Url;
		$msg = 'key='.$XY_Key.'&use='.$XY_Use.'&type='.$type.'&msg='.urlencode($msg).'&show='.$show.'&encode='.$encode;
		$data = Cur_c($url,'GET',$msg);
	
	return $data;
	}
	
	function RobotApiSend($event, $sender = '', $message = ''){
		global $QQRobotIp,$Copyright,$ApiPort;
		if($QQRobotIp != null and $Copyright != null){
			$apiurl = "http://".$QQRobotIp.":".$ApiPort."/Api?Key=".$Copyright."&utf=1";
			if($event == 'ResetRobot'){//重启机器人
				$apiurl .= "&SendType=ResetRobot";
			}elseif($event == 'LoginRobot'){//登陆机器人
				$apiurl .= "&SendType=LoginRobot";
			}elseif($event == 'ExitRobot'){//退出机器人              
				$apiurl .= "&SendType=ExitRobot";
			}elseif($event == 'LoginStatus'){//返回当前登录状态
				$apiurl .= "&SendType=LoginStatus";
			}elseif($event == 'Friend'){//开启关闭好友回复
				$apiurl .= "&SendType=Friend&ID={$message}";
			}elseif($event == 'Cluster'){//开启关闭群回复
				$apiurl .= "&SendType=Friend&ID={$message}";
			}elseif($event == 'GetFriendList'){//获取好友列表
				$apiurl .= "&SendType=GetFriendList";
			}elseif($event == 'AddCluster'){//主动加好友
				$apiurl .= "&SendType=AddCluster&ID=".$sender.'&Message='.$message;
			}elseif($event == 'AddFriend'){//主动加群
				$apiurl .= "&SendType=AddFriend=".$sender.'&Message='.$message;
			}
        return Cur_c($apiurl);
		}
	}
