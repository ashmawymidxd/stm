<?php
include('config.php');
$code=$_GET['code'];
mysqli_query($con,"delete from exams where code='$code'");
header("location:exams.php");
?>