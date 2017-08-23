
<!DOCTYPE html>
<html>
<head>
<title>爱无尚</title>
<meta charset="utf-8"/>
<meta name="author" content="jbs"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta http-equiv="Content-Type" content="text/html; charset=GBK"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="format-detection" content="telephone=no"/>
<meta http-equiv="Expires" content="-1"/>
<meta http-equiv="Cache-Control" content="no-cache"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta name="description" content="" />
<meta name="Keywords" content="" />
<link rel="stylesheet" href="{{asset('home/css/swiper.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('home/font/iconfont.css')}}"/>
<link rel="stylesheet" href="{{asset('home/css/common.css')}}"/>
<link rel="stylesheet" href="{{asset('home/css/fly.css')}}">
<script type="text/javascript" src="{{asset('home/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/jquery-3.1.1.min.js')}}"></script>
<style>
	.public_head i{
		color: white;
	}
	body{
		background: #f5f5f5;
	}
	.present_ban{
		margin-top: 7px;
		background: white;
		height: 123px;
		border-bottom: 1px #f5f5f5 solid;
	}
	.present_cont{
		background: white;
	}
	.present_ban input[type=number]{
		margin-left: 0;
	}

	.present_foot input[type=submit] {
    width: 100%;
    height: 50px;
    border: 0;
    background: none;
    font-size: 17px;
    text-align: center;
    line-height: 50px;
    color: white;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
}
</style>
</head>
<body>
<div class="public_head">
	<h3>积分转账</h3>
	<a href="javascript:history.go(-1);" class="iconfont icon-fanhui"></a>
</div>
<!-- 内容区 -->
<form method = 'post'  action = "{{url('users/editintegral')}}">
<div class="content">
	<div class="cancell_ban">
		<div class="cancell_bano">
			<p>好友手机号</p>
			<input type="text" name="phone"  />
		</div>
	</div>
	<div class="present_ban">
		<em class="cancell_po">转账积分数量</em>
	    <div class="present_bann">
			<input type="number" name="num"/>
		</div>
	</div>
	<div class="present_cont">
		<div class="present_conto">
			<p>可用积分<span>{{$points}}</span></p>
		</div>
	</div>
	<div class="cancell_cont">
		<div class="cancell_conto">
			<p>注：转账最低数量为50个，转账收取5%手续费</p>
		</div>
	</div>
	<div class="present_foot">
		<input type="hidden" name="id" value="{{$id}}">
		
		<input type="submit"   value="确认转账" class="present_btn">
	</div>
</div>
 </form>
</body>
</html>