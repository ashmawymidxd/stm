<?php
include('config.php');

if(isset($_POST['upload'])){
$ccode=$_POST["ccode"];
$cname=$_POST["cname"];
$clevel=$_POST["clevel"];
$cdepart=$_POST["cdepart"];
$cinsert="insert into courses (code,name,level,department) values('$ccode','$cname','$clevel','$cdepart')";
$hold=mysqli_query($con,$cinsert);
header("location:admin.php");
}


if(isset($_POST['fcreate'])){
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
    //$spassword = mysqli_real_escape_string($con, md5($_POST['spassword'])); //this encrepted password
    $spassword=$_POST["spassword"];
    $slevel=$_POST["slevel"];
    $finsert="insert into student (name,id,gba,hour,present,department,password,image,level) values ('$sname',$sid,$sgba,$shour,$spresent,'$sdepartment','$spassword','$fimage_up','$slevel')";
    
    $hold=mysqli_query($con,$finsert);
    if(move_uploaded_file($fimage_location,"fimages/".$fimage_name)){
        echo '<script>alert("done")</script>';
        header("location:admin.php");
    }
    else{
        echo '<script>alert("error")</script>';
    }
    $con->close();
}
?>