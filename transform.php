<div>
数值转换：
<form action="" method="post" >
<input type="text" id="input" name="input">
<input type="submit" value="10进制转2进制" name="to2">
<?php
if(isset($_POST['input'])&&!empty($_POST['input'])){
	echo '转换后的结果是：';
	if(isset($_POST['to2'])&&!empty($_POST['to2'])){
		echo decbin($_POST['input']);
	}
}
?>
</form>

<form action="" method="post" >
<input type="text" id="input" name="input">
<input type="submit" value="2进制转10进制" name="to10">
<?php
if(isset($_POST['input'])&&!empty($_POST['input'])){
	echo '转换后的结果是：';
	if(isset($_POST['to10'])&&!empty($_POST['to10'])){
		echo bindec($_POST['input']);
	}
}
?>
</form>

</div>


<div>

<form action="" method="post" >
<input type="submit" value="当前时间戳" name="timestamp">
<?php
if(isset($_POST['timestamp'])&&!empty($_POST['timestamp'])){
	echo time();
}
?>
</form>

<form action="" method="post" >
<input type="submit" value="当前时间" name="now">
<?php
if(isset($_POST['now'])&&!empty($_POST['now'])){
	echo date("Y-m-d H:i:s");
}
?>
</form>
</div>



<div>
日期转时间戳转换：
<form action="" method="post" >
<input type="text"  name="time">
<input type="submit">
<?php
if(isset($_POST['time'])&&!empty($_POST['time'])){
	echo '转换后的结果是：';
	echo strtotime($_POST['time']);
}
?>
</form>

时间戳转日期转换：
<form action="" method="post" >
<input type="text" name="date">
<input type="submit">
<?php
if(isset($_POST['date'])&&!empty($_POST['date'])){
	echo '转换后的结果是：';
	echo date("Y-m-d H:i:s",$_POST['date']);
}
?>
</form>

</div>

<div>
base64加密:
<form action="" method="post" >
<input type="text"  name="base64_encode">
<input type="submit">
<?php
if(isset($_POST['base64_encode'])&&!empty($_POST['base64_encode'])){
	echo '加密后的结果是：';
	echo base64_encode($_POST['base64_encode']);
}
?>
</form>

base64解密:
<form action="" method="post" >
<input type="text" name="base64_decode">
<input type="submit">
<?php
if(isset($_POST['base64_decode'])&&!empty($_POST['base64_decode'])){
	echo '解密后的结果是：';
	echo base64_decode($_POST['base64_decode']);
}
?>
</form>

</div>


<div>
urlencode加密:
<form action="" method="post" >
<input type="text" name="urlencode">
<input type="submit" value="urlencode加密">
<?php
if(isset($_POST['urlencode'])&&!empty($_POST['urlencode'])){
	echo '<br>';
	echo $_POST['urlencode'];
	echo '<br>';
	echo urlencode($_POST['urlencode']);
}
?>
</form>
</div>

<div>
urldecode解密
<form action="" method="post" >
<input type="text" name="urldecode">
<input type="submit" value="urldecode解密">
<?php
if(isset($_POST['urldecode'])&&!empty($_POST['urldecode'])){
	echo '<br>';
	echo $_POST['urldecode'];
	echo '<br>';
	echo urldecode($_POST['urldecode']);
}
?>
</form>
</div>



<div>

<form action="" method="post" >
<input type="text" name="json">
<input type="submit" value="json解密">
<?php
if(isset($_POST['json'])&&!empty($_POST['json'])){
	echo $_POST['json'];
	echo '<br>';
	echo json_decode($_POST['json']);
}
?>
</form>

</div>


<div>

<form action="" method="post" >
<input type="text" name="MD5">
<input type="submit" value="MD5">
<?php
if(isset($_POST['MD5'])&&!empty($_POST['MD5'])){
	echo '<br>';
	echo $_POST['MD5'];
	echo '<br>';
	echo md5($_POST['MD5']);
}
?>
</form>

</div>


<div>

<form action="" method="post" >
<input type="text" name="strlen">
<input type="submit" value="计算字符长度">
<?php
if(isset($_POST['strlen'])&&!empty($_POST['strlen'])){
	echo '<br>';
	echo $_POST['strlen'];
	echo '<br>';
	echo '字符长度:'.strlen($_POST['strlen']);
}
?>
</form>

</div>


<div>

<form action="" method="post" >
<input type="text" name="beform_time">
<input type="submit" value="计算x天前是几号">
<?php
if(isset($_POST['beform_time'])&&!empty($_POST['beform_time'])){
	echo '<br>';
	echo $_POST['beform_time'];
	echo '<br>';
	echo $_POST['beform_time'].'天前是:'.date('Y-m-d',time()-($_POST['beform_time']*3600*24));
}
?>
</form>

<form action="" method="post" >
<input type="text" name="after_time">
<input type="submit" value="计算x天后是几号">
<?php
if(isset($_POST['after_time'])&&!empty($_POST['after_time'])){
	echo '<br>';
	echo $_POST['after_time'];
	echo '<br>';
	echo $_POST['after_time'].'天后是:'.date('Y-m-d',time()+($_POST['after_time']*3600*24));
}
?>
</form>


<form action="" method="post" >
<input type="text" name="time_jl">
<input type="submit" value="距离今天是几号">
<?php
if(isset($_POST['time_jl'])&&!empty($_POST['time_jl'])){
	echo '<br>';
	echo $_POST['time_jl'];
	echo '<br>';
	$time_jl=strtotime($_POST['time_jl']);
	$today=strtotime(date('Y-m-d'));

	if($time_jl-time()>0){
		echo $_POST['time_jl'].'距离今天是:'.(strtotime($_POST['time_jl'])-$today)/24/3600;
	}else{
		echo $_POST['time_jl'].'距离今天是:'.($today-strtotime($_POST['time_jl']))/24/3600;
	}
	
}
?>
</form>

<form action="" method="post" >

正则规则：<br><textarea name="rule" style="width:600px;"><?php echo isset($_POST['rule'])?$_POST['rule']:'';?></textarea><br>
正则匹配测试字符：<br><textarea name="ruleTest" style="width:600px;"><?php echo isset($_POST['ruleTest'])?$_POST['ruleTest']:'';?></textarea><br>
正则匹配测试网址：<br><textarea name="ruleUrl" style="width:600px;"><?php echo isset($_POST['ruleUrl'])?$_POST['ruleUrl']:'';?></textarea><br>

<input type="submit" value="匹配正则表达式">
<?php
if(isset($_POST['rule'])&&!empty($_POST['rule'])){
	if(isset($_POST['ruleUrl'])&&!empty($_POST['ruleUrl'])){
		
		list($html,$htmlCode)=getHtml($_POST['ruleUrl']);
		//成功获取页面
		if(!empty($html) && $htmlCode<400){
			preg_match_all($_POST['rule'],$html,$match);
			echo '<pre>';print_r($match);exit;
		}else{
			return false;
		}
	}elseif( isset($_POST['ruleTest'])&&!empty($_POST['ruleTest']) ){
		preg_match_all($_POST['rule'],$_POST['ruleTest'],$match);
		echo '<pre>';print_r($match);exit;
	}


}
?>
</form>
</div>


<?php
function getHtml($url){
	$htmlCode=200;//http状态码
	$html=false;//抓取的内容
	$timeout = 10; //请求超时时间

	if(function_exists('curl_init')) { 		 
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL,$url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch,CURLOPT_HEADER,0);
		curl_setopt ($ch, CURLOPT_NOBODY, 0);
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		$html = curl_exec($ch);
		$htmlCode= curl_getinfo($ch,CURLINFO_HTTP_CODE);
		curl_close($ch);
	}elseif(function_exists('file_get_contents')) {//不支持http状态判断
		$opts= array(
			'http'=>array(
			'method'=>'GET',
			'user_agent'=>'Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0',
			'timeout'=>$timeout,
			'ignore_errors'=>false,
		));
		$context = stream_context_create($opts);
		$html =@file_get_contents($url, false, $context);		
	}
	
	//抓取成功
	if($html!==false && !empty($html)){
		preg_match('/<META HTTP-EQUIV="REFRESH" CONTENT="0; URL=(.*?)">/',$html,$match);
		
		if(isset($match[1]) && !empty($match[1])){
			$url=fillUrl($url,$match[1]);
			return getHtml($url);
		}
		
		return array($html,$htmlCode);
	}else{//抓取失败
		return array(false,false);
	}
}

function fillUrl($surl,$url){

		$http=substr($url,0,7);
		$https=substr($url,0,8);
		if($http=='http://' || $https=='https://'){//如果已经是完整链接，则不作补全处理
			return $url;
		}

		$urlArr=explode('/',trim($surl,'http://'));
		if($urlArr){
			$urlCount=count($urlArr)-1;
			if($urlCount=='0' && isset($urlArr[0])){
				//$url='http://'.implode('/',$urlArr).'/'.trim($url,'\.\.\/');
			}else{
				$count=substr_count($url,'../');
				for($i=$urlCount;$i>$urlCount-$count-1;$i--){
					unset($urlArr[$i]);
				}
			}
			$url='http://'.implode('/',$urlArr).'/'.trim($url,'\.\.\/');
		}
		return $url;
	}
?>




