<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
<link type="text/css" rel="stylesheet" href="/pines/weiphp2.0.1202/Public/Home/css/jump.css?v=<?php echo SITE_VERSION;?>" />
</head>
<body>
<div class="system-message">
    <?php if(isset($message)): ?><h1 class="success"></h1>
    <p class="success"><?php echo($message); ?></p>
    <?php else: ?>
    <h1 class="error"></h1>
    <p class="error"><?php echo($error); ?></p><?php endif; ?>
    <p class="detail"></p>
    <p class="jump">
    页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
    </p>
</div>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>