<?php
include('config.php');
if(isset($_POST['fconfirm'])){
$ccode=$_POST["ccode"];
$cname=$_POST["cname"];
$clevel=$_POST["clevel"];
$cdepart=$_POST["cdepart"];



$data=mysqli_query($con,"select * from exams where code='$ccode' and name='$cname'");

if(mysqli_num_rows($data) > 0){
    echo '<script>alert("the courses aready register !!")</script>';
    header("location:courses.php");
 }
 
else{
$cinsert="insert into exams (code,name,level,department) values('$ccode','$cname','$clevel','$cdepart')";
$hold=mysqli_query($con,$cinsert);
header("location:courses.php");
    
 }

}
 ?>