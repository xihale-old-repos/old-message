<!DOCTYPE HTML>
<html>
	<body>
		<pre><code id="code" style="font-size:25px;"><?php
		include('../config.php');
		if(!is_file('../'.$folder.'/'.$_SERVER['QUERY_STRING'])){echo '此链接不存在!';}else{
		$fp=fopen('../'.$folder.'/'.$_SERVER['QUERY_STRING'],'r');
		echo htmlspecialchars(fread($fp,filesize('../'.$folder.'/'.$_SERVER['QUERY_STRING'])));}
		?></code></pre>
		<link rel="stylesheet" href=" https://xihale.gitee.io/temporary-information/atom-one-dark.min.css" />
		<script defer src=" https://xihale.gitee.io/temporary-information/highlight.min.js"></script>
		<script defer src="https://xihale.gitee.io/temporary-information/start.js"></script>
	</body>
</html>
