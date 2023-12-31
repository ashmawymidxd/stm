<html>
<head>
<title> ashawy design</title>
</head>
<style>
.guiadd{
   
}
.guiaddpro{
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
         <h2 style="margin-top:50px;" class="h22">Admin login</h2>
         <br>
         </center>
       <center>
        <div class="guiadd">
            <?php
            include('config.php');
            if(isset($_POST['fpassword'])){
                $fpassword=$_POST['fpassword'];
            }
            if(isset($_POST["enter"]) && $fpassword !=null){
                 $femail=$_POST["femail"];
                 $select="select * from admin where password=$fpassword";
                 $result=mysqli_query($con,$select);
                 while($matrix=mysqli_fetch_array($result))
             {
             if($matrix[0]==$fpassword){
                 header("location:admin.php");
             }
             }
             echo '<script>alert("error")</script>';
             }
             
            ?>
        <form method="post" action="adminlogin.php">
                 <h1 class="cent" style="margin-top:50px"> log in form</h1>
				<div class="form-group">
				  <h4 for="email" style="text-align:left;color:blue">Administrator Username</h4>
				  <input type="text" class="form-control" id="email" name="femail" placeholder="Admin Username" aria-describedby="emailHelp"/>

				  <h4 for="email" style="text-align:left;color:blue">Administrator password</h4>
				  <input type="password" class="form-control" id="password" name="fpassword" placeholder="Admin password" aria-describedby="emailHelp"/>
				  <span id="emailHelp" class="form-text text-muted" style="display: none;">Please enter a valid e-mail address.</span>
			  </div>
				<div class="text-center">
				  <button class="btne" name="enter" style="margin-bottom:50px">Enter</button>
				</div>
			  </form>	
        </div>

        <div class="guiaddpro">
    
        </div>
       </center>
        
    </div>
    <script src="JAVASCRIPT/animation.js"></script>
</body>
</html>