<?php
include('config.php');
if(isset($_POST['fupdate'])){
    $sname=$_POST["sname"];
    $sid=$_POST["sid"];

    $fimage=$_FILES['ffile'];
    $fimage_location=$_FILES['ffile']['tmp_name'];
    $fimage_name=$_FILES['ffile']['name'];
    $fimage_up="fimages/".$fimage_name;

    $sgba=$_POST["sgba"];
    $shour=$_POST["shour"];
    $spresent=$_POST["spresent"];
    $sdepartment=$_POST["sdepartment"];
    $spassword=$_POST["spassword"];
    $slevel=$_POST["slevel"];
    
    $update="update student set name='$sname',id=$sid,gba=$sgba,hour=$shour,present=$spresent,department='$sdepartment',password='$spassword',image='$fimage_up',level='$slevel' where id=$sid";
    $hold=mysqli_query($con,$update);
    if(move_uploaded_file($fimage_location,"fimages/".$fimage_name)){
        echo '<script>alert("done")</script>';
        header("location:admin.php");
    }
    else{
        echo '<script>alert("select image plaese!")</script>';

    }

}
?>