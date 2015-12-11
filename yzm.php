<?php
session_start();

$code_length = 5;
$image_args = [
	'width' => 68,
	'height' => 20
];


$str = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
for($i = 0 ; $i < $code_length; $i++) {
	$code .= $str[rand(0,51)];
}
$_SESSION['check_yzm']=$code;
$image = imagecreate($image_args['width'], $image_args['height']);


$background = imagecolorallocate($image, 117, 166, 57);

$text = imagecolorallocate($image, 0, 255, 0);
$red = imagecolorallocate($image, 242, 109, 128);

for ($i=0; $i < 300; $i++) { 
			imagesetpixel(
					$image, 
					rand(0,$image_args['width']), 
					rand(0,$image_args['height']), 
					$red
				);
}


imagestring($image, 5, 10, 3, $code, $text);


ob_clean();


header('Cache-Control: private, max-age=0, no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);		
header('Pragma: no-cache');
header("content-type: image/png");
imagepng($image);

imagedestroy($image);
?>