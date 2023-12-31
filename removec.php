<?php
include('config.php');
session_start();
$student_id = $_SESSION['student_id'];
$selecteds=mysqli_query($con,"select * from student where id=$student_id");
$custom=mysqli_fetch_array($selecteds);
$id=$_GET['id'];
$sid=$custom['id'];

mysqli_query($con,"delete from enrolled_courses where code='$id' and student_id=$sid");
header("location:member.php");
?>