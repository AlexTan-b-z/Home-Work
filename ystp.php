<?php
$imagename = 'test.jpg';//这里抓取的upload.php上传的本地图片
    $percent = 0.5;
    header('Content-Type: image/jpeg');
    header('Content-Type: image/gif');
    header('Content-Type: image/png');
    
    $img = getimagesize($imagename);
      switch ($img[2])
      {
        case 1:
          $image = imagecreatefromgif($imagename);
          break;
        case 2:
          $image = imagecreatefromjpeg($imagename);
          break;
        case 3:
          $image = imagecreatefrompng($imagename);
          break;
      }
    $height = $img[1];
    $width = $img[0];
    $new_height = $height * $percent;
    $new_width = $width * $percent;

    $image_p = imagecreatetruecolor($new_width, $new_height);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
    imagejpeg($image_p,null,100);
    ?>