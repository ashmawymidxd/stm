<?php
include("config.php");
if (isset($_POST['send'])){


   $student_id=$_POST['input4'];
   $cours_name=$_POST['input1'];
   $degree=$_POST['input2'];
   $grade=$_POST['input3'];

   $update="update enrolled_courses SET degree=$degree ,grade='$grade' WHERE student_id=$student_id and name='$cours_name'";
   $hold=mysqli_query($con,$update);

   header("location:member.php");
   //echo( $student_id.$cours_name.$degree.$grade);

}



?>