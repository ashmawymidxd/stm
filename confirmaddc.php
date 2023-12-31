<?php
include('config.php');
if(isset($_POST['fconfirm'])){
$sid=$_POST["sid"];
$ccode=$_POST["ccode"];
$cname=$_POST["cname"];
$clevel=$_POST["clevel"];



$data=mysqli_query($con,"select * from enrolled_courses where student_id=$sid and code='$ccode'");

if(mysqli_num_rows($data) > 0){
    echo '<script>alert("the courses aready register !!")</script>';
    header("location:member.php");
 }
 
else{
$cinsert="insert into enrolled_courses (student_id,code,name,level) values($sid,'$ccode','$cname','$clevel')";
$hold=mysqli_query($con,$cinsert);
header("location:member.php");
    
 }









}