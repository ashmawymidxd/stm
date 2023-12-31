<?php
include('config.php');
$id=$_GET['id'];
mysqli_query($con,"delete from courses where code='$id'");
header("location:courses.php");
?>