<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
&& ($_FILES["file"]["size"] < 80000))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "上传文件: " . $_FILES["file"]["name"] . "<br />";
    echo "文件类型: " . $_FILES["file"]["type"] . "<br />";
    echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "文件目录: " . $_FILES["file"]["tmp_name"] . "<br />";
    
    print_r($_FILES);
    
    $name = iconv('utf-8','gb2312',$_FILES["file"]["name"]); 
    move_uploaded_file($_FILES["file"]["tmp_name"], "" . $name);
  }
}
else
  {
  echo "上传错误";
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action ="ystp.php" method="post">
  <input type="submit"name="submit"value="查看缩略图">
</body>
</html>