<?PHP
	
	function Cur_c($url,$p_g='GET',$msg=''){
		$curl = curl_init();// 初始化一个 cURL 对象
		if($p_g=='POST'){
			curl_setopt($ch,　CURLOPT_POST,　1);//开启POST
			if($msg!=''){
				curl_setopt($ch,　CURLOPT_POSTFIELDS,$msg);//POST数据
			}
		}elseif($p_g=='GET'){
			if($msg!=''){
				$url = $url.'?'.$msg;
			}else{
				$url = $url;
			}
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
			$url = "http://".$QQRobotIp.":".$ApiPort."/Api";//?&utf=1";
			if($event == 'ResetRobot'){//重启机器人
				$msg = "Key=".$Copyright."&SendType=ResetRobot&utf=1";
			}elseif($event == 'LoginRobot'){//登陆机器人
				$msg = "Key=".$Copyright."&SendType=LoginRobot&utf=1";
			}elseif($event == 'ExitRobot'){//退出机器人              
				$msg = "Key=".$Copyright."&SendType=ExitRobot&utf=1";
			}elseif($event == 'LoginStatus'){//返回当前登录状态
				$msg = "Key=".$Copyright."&SendType=LoginStatus&utf=1";
			}elseif($event == 'Friend'){//开启关闭好友回复
				$msg = "Key=".$Copyright."&SendType=Friend&ID={$message}&utf=1";
			}elseif($event == 'Cluster'){//开启关闭群回复
				$msg = "Key=".$Copyright."&SendType=Friend&ID={$message}&utf=1";
			}elseif($event == 'GetFriendList'){//获取好友列表
				$msg = "Key=".$Copyright."&SendType=GetFriendList&utf=1";
			}elseif($event == 'GetQunList'){//获取群列表
				$msg = "Key=".$Copyright."&SendType=GetQunList&utf=1";
			}elseif($event == 'AddCluster'){//主动加好友
				$msg = "Key=".$Copyright."&utf=1&SendType=AddCluster&ID=".$sender.'&Message='.$message;
			}elseif($event == 'AddFriend'){//主动加群
				$msg = "Key=".$Copyright."&utf=1&SendType=AddFriend=".$sender.'&Message='.$message;
			}
        	return Cur_c($url,'GET',$msg);
		}
	}
	
	function GetQunList(){
		$date=RobotApiSend('GetQunList');
		$da=explode('群内部ID:',$date);
		$st = '';
		for($i = 1;$i < count($da); $i++){
			$de=explode('群号:',$da[$i]);
			$dc=explode('群名称:',$de[1]);

		$st .= trim($dc[1]).' '.trim($dc[0])."\r\n";
		}
		return $st;
	}
	
	   ////获得访客真实ip
	function Getip(){
		if(!empty($_SERVER["HTTP_CLIENT_IP"])){   
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		}
		if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){ //获取代理ip
			$ips = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
		}
		if($ip){
			$ips = array_unshift($ips,$ip); 
		}
   
		$count = count($ips);
		for($i=0;$i<$count;$i++){   
			if(!preg_match("/^(10|172\.16|192\.168)\./i",$ips[$i])){//排除局域网ip
				$ip = $ips[$i];
				break;    
			}  
		}  
		$tip = empty($_SERVER['REMOTE_ADDR']) ? $ip : $_SERVER['REMOTE_ADDR']; 
		if($tip=="127.0.0.1"){ //获得本地真实IP
			return get_onlineip();   
		}else{
		return $tip; 
		}
	}
	
	   ////获得本地真实IP
	function get_onlineip() {
		$mip = file_get_contents("http://city.ip138.com/city0.asp");
		if($mip){
			preg_match("/\[.*\]/",$mip,$sip);
			$p = array("/\[/","/\]/");
			return preg_replace($p,"",$sip[0]);
		}else{return "获取本地IP失败！";}
	}
