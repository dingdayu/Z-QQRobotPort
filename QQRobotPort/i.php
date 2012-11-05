<?php
	
	if($i_qun_kg != 1){
		if($Event == 'ReceiveNormalIM'){//如果收到好友消息
			$str = file_get_contents("http://122.227.43.245/robot/demo/wap/wap-demo.action?requestContent=".urlencode($Message));
			if(!isset($str)){
				exit("小i api 出错！请联系管理员：小雨 614422099@qq.com 告知！");
			}
			preg_match('%<div class="wap_content2 left">(.*?)</div>%si',$str,$r);
			preg_match('%</span>(.*?)</p>%si',$r[1],$re);
			$i = str_replace($i_name,$my_name,$re[1]);
			echo $i;
			exit;
		}
	}else{
		if($Event == 'ReceiveClusterIM'){
			if(stristr($Message,$i_qun_cmd)){
				$Message = str_ireplace($i_qun_cmd,"",$Message);
				$str = file_get_contents("http://122.227.43.245/robot/demo/wap/wap-demo.action?requestContent=".urlencode($Message));
				if(!isset($str)){
					exit("小i api 出错！请联系管理员：小雨 614422099@qq.com 告知！");
				}
				preg_match('%<div class="wap_content2 left">(.*?)</div>%si',$str,$r);
				preg_match('%</span>(.*?)</p>%si',$r[1],$re);
				$i = str_replace($i_name,$my_name,$re[1]);
				echo $i;
				exit;
			}
		}elseif($Event == 'ReceiveNormalIM'){//如果收到好友消息
			$str = file_get_contents("http://122.227.43.245/robot/demo/wap/wap-demo.action?requestContent=".urlencode($Message));
			if(!isset($str)){
				exit("小i api 出错！请联系管理员：小雨 614422099@qq.com 告知！");
			}
			preg_match('%<div class="wap_content2 left">(.*?)</div>%si',$str,$r);
			preg_match('%</span>(.*?)</p>%si',$r[1],$re);
			$i = str_replace($i_name,$my_name,$re[1]);
			echo $i;
			exit;
		}
	}
?>