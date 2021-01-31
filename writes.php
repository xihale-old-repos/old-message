<?php
include('config.php');
$data=$_POST['data'];
if($data==""||strlen($data)>20*10000)
{
	echo "\u6570\u636e\u6709\u8bef\u0021";
	exit();
}
$filename=$_POST['Key'];
if(is_file($folder.'/'.$filename)){echo 'error';exit();}
if($filename=="auto")$filename=date('ymdHis');
$fp=fopen($folder.'/'.$filename,'w');
fwrite($fp,$data);
fclose($fp);
echo $filename;