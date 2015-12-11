<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
<form action ="yz.php" method="post" enctype="multipart/form-data">
	<label for="file">文件名称:</label>
	<input type="file" name="file" id="file" />
	<br />
	<input type="text" name="yzm" id="yzm" value="请输入验证码,点击图片刷新">
	<img src="yzm.php" title="点击刷新" align="absbottom" onclick="this.src='yzm.php?'+Math.random();">
	<br /> 
	<input type="submit"name="submit"value="上传">
	
	
</form>
</body>
</html>