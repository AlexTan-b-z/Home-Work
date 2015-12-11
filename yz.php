<?php

session_start();

$yzm=$_POST['yzm'];

if(empty($yzm))
{
	echo "验证码不能为空";
	die;
}
if ($yzm==$_SESSION['check_yzm'])
{
	include 'upload2.php';
}
else
{
	echo "验证码输入错误";
}

?>