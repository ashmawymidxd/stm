<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body{
    background-color:#ddd;
    color:blue;
}
div{
    background-color:#fff;
    width:80%;
    margin:auto;
    text-align:center;
    color:blue;
    border-radius: 50px;
    padding: 100px 0px;
    margin-top: 50px;
}
        .div{
            padding: 50px 0px; 
        }
        #h1{
            color:blue;
        }

    </style>
</head>
<body>
    <div>
<h1>ERROR</h1>
<h2>make sur you enter the corect password !!<br> and try again </h2>
    </div>
    <br>
   <div class="div">
<h1>ERROR</h1>
<h2>our go to help if you forget password</h2>
    </div>
</body>




</html>



<?php
$host="localhost";
$user="root";
$pass="";
$db="students";
$hold=mysqli_connect($host, $user, $pass, $db);
session_start();

$password=null;
if (isset($_POST["scode"])){
    $code=$_POST["scode"];
    }
if (isset($_POST["spassword"])){
    $password=$_POST["spassword"];
    }
//$password = mysqli_real_escape_string($hold, md5($_POST['spassword'])); // this encrepted password
if(isset($_POST["login"]) && $password !=null){
    $select="select * from student where password='$password' and id='$code' ";
    $result=mysqli_query($hold,$select);
    while($matrix=mysqli_fetch_array($result))
{

if(mysqli_num_rows($result) > 0){
    $_SESSION['student_id'] = $matrix['id'];
    header("location:index.php");
}

}







}










?>