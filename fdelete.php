<?php
include('config.php');
$id=$_GET['id'];
mysqli_query($con,"delete from student where id='$id'");
header("location:students.php");
?>