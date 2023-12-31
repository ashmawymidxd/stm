<?php
include('config.php');
$id=$_GET['id'];
$update=mysqli_query($con,"select * from student where id=$id");
$data=mysqli_fetch_array($update);
?>
<html>
<head>
<title> ashawy design</title>
</head>
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
      <h2 style="margin-top: 30px">Administrator</h2>
        <br>
        <p> 
        make sure everything is as it should be. Getting exams regularly benefits you<br>
         because if and when something is abnormal, you will get to know 
        </p>
         <br>
         <?php
            if(isset($_POST['showdepart']))
            {
                header("location:products.php");
            }
            ?>
        <div id="btn">
             <button class="btn" id="allelement">registration</button>
            <button class="btn" id="depart">add new department</button>
            <button class="btn" id="product">add new product</button>
            <button class="btn" id="showdepart" name="showdepart"><a href="products.php"class="btna">show department</a></button>
            <button class="btn" id="showdepart" name="showdepart"><a href="fproducts.php"class="btna">show products</a></button>
            <button class="btn">log out</button>
        </div>
       <center>
        <div class="guiaddpro">
        <form action="fedite.php" method='post' enctype="multipart/form-data" class="form">
        <div class="head">
            <h1>UPDATE PRODUCTS</h1>
            <p>product management system </p>
        </div>
        <div class="input">
            <div class="them">
            </div>
            <br>
            <input type="text" placeholder="student name" id="title" name="sname" value="<?php echo($data['name'])?>"/>
            <div class="price">

            <input type="text" placeholder="student id" id="price" name="sid" value="<?php echo($data['id'])?>"/>
            <input type="text" placeholder="student gba" id="taxes" name="sgba" value="<?php echo($data['gba'])?>"/>
            <input type="text" placeholder="finshed hours" id="ads" name="shour" value="<?php echo($data['hour'])?>"/>
            <input type="text" placeholder="student grade" id="discount" name="spresent" value="<?php echo($data['present'])?>"/>

            </div>
            <input type="file" id="ffile" name="ffile"><label for="ffile">uploade img</label>
            <select name="sdepartment" id="section_id" class="form-control" required>
                <option value="IT" selected >Information Technology </option>
                <option value="CS" selected >Computer Sience</option>
                <option value="IS" selected >Information System</option>
                <option value="MM" selected >Malti Media</option>
            </select>
            <select name="slevel" id="section_id" class="form-control" required>
                <option value="First Level" selected >First Level</option>
                <option value="Second level" selected >Second level</option>
                <option value="Third Level" selected >Third Level</option>
                <option value="Fourth Level" selected >Fourth Level</option>
            </select>
            <input type="text" placeholder="student password" id="category" name="spassword" value="<?php echo($data['password'])?>"/>
            <button  name="fupdate" class="uploade">update student</button>
            <a href="fproducts.php" class="display">display all proudact</a>
        </div>
    </div>
    </form>
        </div>
       </center>
        
    </div>
    <script src="JAVASCRIPT/animation.js"></script>
</body>
</html>