<?php
include('config.php');
function deldir($dir) {
   //先删除目录下的文件：
	$dh=opendir($dir);
	while ($file=readdir($dh)) {
		if($file!='.'&&$file!='..')
		{
			$fullpath=$dir."/".$file;
			unlink($fullpath);
		}
	}
	closedir($dh);
}
if($_GET['KEY']==$DelKey)
{
	deldir($folder);
	echo 'OK!';
	exit();
}
echo 'The key is error!';