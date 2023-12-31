<?php
include('config.php');
$id=$_GET['id'];
$update=mysqli_query($con,"select * from courses where code='$id'");
$data=mysqli_fetch_array($update);
//============ this to select student ====================================
session_start();
$student_id = $_SESSION['student_id'];
$selecteds=mysqli_query($con,"select * from student where id=$student_id");
$custom=mysqli_fetch_array($selecteds);
?>

<html>
<head>
<title> ashawy design</title>
</head>
<style>
.guiadd{
   margin-top:70px;
}
#submit{
        width:300px;
        height:70px;
        font-size:30px;
        border:1px solid blue;
    }

#return{
    text-decoration: none;
    border: none;
    text-align: center;
    cursor: pointer;
    border-radius: 20px;
    color: blue;
    font-size: 20px;
    transition-duration: 500ms;
    box-shadow: -5px -5px 8px 0px #ffffff, 5px 5px 10px 0px rgb(194, 190, 190);
    width:300px;
    height:70px;
    font-size:30px;
    padding:18px 100px;
    border:1px solid red;
}
#return:hover{
    background-color:blue;
    color:white;
}

.in{
    display:none;
}


</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
    <script src="METHOD/jquery.js"></script>
    <link href="CSS/stylesh.css" rel="stylesheet" type="text/css">
    <link href="CSS/styleadmin.css" rel="stylesheet" type="text/css">
    <div id="header" class="log" style="position: fixed;z-index: 10">
        <img src="img/III.png" class="iii" style="margin-top: 15px;"/>
        <div class="grad">
            <div><img src="img/prand.png" class="card"/><p id="p1">wellcom man too<br>Box Coding</p></div>
            <div id="blue"><img src="img/man.png" class="card1"/></div>
        </div>
    </div>
    <ul style="margin-top: 77px" >
    <li><a href="index.php"><img src="IMG/Picture1.png" class="icon"/></a><a m="1" href="index.php">Home</a></li>
<li><a href="about.php"><img src="IMG/Picture2.png" class="icon"/></a><a m="1" href="about.php">About</a></li>
<li><a href="admin.php"><img src="IMG/admin.png" class="icon"/></a><a m="1" href="adminlogin.php">Admin</a></li>
<li><a href="member.php"><img src="IMG/report.png" class="icon"/></a><a m="1" href="member.php">Report</a></li>
<li><a href="contact.php"><img src="IMG/contact.png" class="icon"/></a><a m="1" href="contact.php">Contact</a></li>
<br><br><br><br><br><br><br><br>
<li><a href="#member.php"><img src="IMG/privasy.png" class="icon"/></a><a m="1" href="policy.php">privacy</a></li>
<li><a href="#contact.php"><img src="IMG/licence.png" class="icon"/></a><a m="1" href="#shopingcar.php">licence</a></li>
    </ul>
    <div id="contain">
         
         
        
          
       <center>
          <div class="guiadd">
            <form class="form" action="confirmaddc.php" method='post' enctype="multipart/form-data">
            <div class="head">
            <h1>ENROLL COURSES</h1>
            <p>student management system </p>
            </div>
                <input type="text" placeholder="course code" name="sid" class="in" value="<?php echo($custom['id'])?>"><br>
                <input type="text" placeholder="course code" name="ccode" value="<?php echo($data['code'])?>"><br>
                <input type="text" placeholder="course name" name="cname"  value="<?php echo($data['name'])?>"><br>
                <input type="text" placeholder="course level" name="clevel" class="in"  value=" <?php echo($data['level'])?>"><br>
                <input type="text" placeholder="course depart" name="cdepart" value="<?php echo($data['department'])?>"><br>
                <button id="submit" name="fconfirm">Confirm</button>
                <a href='member.php' id='return'>Cancle</a>
            </form>
        </div>
        
       </center>
        
    </div>
    <script src="JAVASCRIPT/animation.js"></script>
</body>
</html>