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
#guiaddexams{
    width:90%;
}
.mainlogo{
    margin-left:5%;
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
         <h2 style="margin-top:50px; ">Administrator</h2>
         <br>
          <p> 
          make sure everything is as it should bemake sure everything is as it should be.<br> Getting exams Getting exams regularly benefits you<br>
          because if and when something Getting . 
         </p>
         </center>
         <img src="img/logo 2.png" class="mainlogo"><br>
         <br>
         <?php
            if(isset($_POST['showdepart']))
            {
                header("location:products.php");
            }
            ?>
            <center>
        <div id="btn">
            <button class="btn" id="depart">add courses</button>
            <button class="btn" id="product">add new student</button>
            <button class="btn" id="showdepart" name="showdepart"><a href="students.php"class="btna">show all students</a></button>
            <button class="btn" id="showdepart" name="showdepart"><a href="courses.php"class="btna">show all courses</a></button>
            <button class="btn" id="showdepart" name="showdepart"><a href="exams.php"class="btna">show all exams</a></button>
        </div></center>
       <center>
          <div class="guiadd">
            <form action="insert.php" method='post' enctype="multipart/form-data" class="form">
            <div class="head">
            <h1>ADD NEW COURSES</h1>
            <p>student management system </p>
            </div>
                <input type="text" placeholder="course code" name="ccode"><br>
                <input type="text" placeholder="course name" name="cname"><br>
                <input type="text" placeholder="course level" name="clevel"><br>
                <input type="text" placeholder="course depart" name="cdepart"><br>
                <button name="upload" class="uploade">uploade</button><br>
                <a href="courses.php" class="display">display all courses</a>
            </form>
        </div>
        



        <div class="guiaddpro">
        <form  action="insert.php" method='post' enctype="multipart/form-data" class="form">
             <div class="head">
                <h1>ADD NEW STUDENT</h1>
                <p>student management system </p>
             </div>
            <div class="input">
            <div class="them">
            </div>
            <br>
            
            <input type="text" placeholder="student name" id="title" name="sname"/>
            <div class="price">

            <input type="text" placeholder="student id" id="price" min="0" name="sid"/>
            <input type="text" placeholder="student gba" id="taxes" name="sgba"/>
            <input type="text" placeholder="finshed hours" id="ads" name="shour"/>
            <input type="text" placeholder="student grade" id="discount" name="spresent"/>

            </div>
            <di class="flex">
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
            </di>
            
            <input type="text" placeholder="student password" id="category" name="spassword"/>
            <button id="submit" name="fcreate" class="uploade">Add</button><br>
            <a href="students.php" class="display">Show all student</a>
        </div>
    </form>
    </div>
       </center>
       








        
    </div>
    <script src="JAVASCRIPT/animation.js"></script>
</body>
</html>