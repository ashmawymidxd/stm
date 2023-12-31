<?php
include("config.php");
$id=$_GET["id"];
$selected=mysqli_query($con,"select * from student where id=$id");
$data=mysqli_fetch_array($selected);


header('Content-type: image/jpeg');
$font=realpath('font.ttf');
$image=imagecreatefrompng('certif.png');
$color=imagecolorallocate($image,21,2,85);
$name=$data['name'];
imagettftext($image,25,0,330,260,$color,$font,$name);

$tname="D.Hassona";
imagettftext($image,25,0,330,375,$color,$font,$tname);

$cname=$data['id'];
imagettftext($image,25,0,290,485,$color,$font,$cname);

$tname=$data['department'];
imagettftext($image,20,0,280,830,$color,$font,$tname);

$d2=date('D/M/Y');
imagettftext($image,30,0,130,580,$color,$font,"DATE : ".$d2);

imagejpeg($image);
imagejpeg($image,"student/".$name.".png");
imagedestroy($image);

header("location:students.php");

?>