<?php
include('config.php');
if(isset($_POST['update'])){

$ccode=$_POST["ccode"];
$cname=$_POST["cname"];
$clevel=$_POST["clevel"];
$cdepart=$_POST["cdepart"];

$update="update courses set name='$cname',level='$clevel',department='$cdepart' where code='$ccode'";
$hold=mysqli_query($con,$update);
header("location:courses.php");
}
?>
