<html>
<head>
<title> ashawy design</title>
</head>
<style>
    #search{
        text-align: center;
        width:30%;
        height:80px;
        font-size:60px;
        border-radius:20px;
        color:#0a1a96;
    }
    #cent{
        width:30px;
        margin:10px 10px;
    }
    .aa{
     background-color: #ebeaef9a;
     color: #001eff;
     box-shadow:-2px -2px 0px 0px #ffffff,5px 5px 5px 0px rgb(194, 190, 190);
    }
    .aa:hover{
     background-color:blue;
     color:white;
    /* box-shadow:-2px -2px 0px 0px #ffffff,5px 5px 5px 0px rgb(194, 190, 190);*/
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
            <div id="blue"><img src="img/search.png" id="cent" class="card1"/></div>
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
        <h2 style="padding:50px 0px;font-size:30px;margin-top:70px" class="h2" id="discount"> <a href="admin.php"><img src="IMG/return.png" alt="" width=23></a> ALL EXAMS : </h2>
        </center>
        <center>
        <br>
        <input type="text" id="search" placeholder="search">
        </center>
        <div>
            <center>
            <?php
        include('config.php');
        $result=mysqli_query($con,"select * from exams");
        while($row=mysqli_fetch_array($result)){

            echo "<center>
            <main>
                <div class='fdiv'>   
                         <br>
                         <h2 class='hi'>name :$row[name]</h2>
                          <br>   
                            <div class='data'>            
                                <p>Student level:$row[level]</p>
                                <p>Student depart:$row[department]</p>
                            </div>
                             <h2 class='hi'>Cours Code :$row[code]</h2>
                           <a href='deleteexam.php ?code=$row[code]' class='aa'>delete</a>
                           <a href='#fupdate.php ?code=$row[code]' class='aa'>update</a>
                           <a href='#session.php ?code=$row[code]' class='aa'>confirm</a>
                </div>
            </main>
            </center>";
        }
        ?>
            </center>
        </div>

        <br>
    </div>
    
    <script>
function counters(){
    var table=document.getElementsByClassName("fdiv");
    var num=0;
    for(i=0;i<table.length;i++){
        num+=1;
    }
    window.discount.innerHTML+=num;
}
counters();
 
</script>
    <script src="JAVASCRIPT/animation.js"></script>
</body>
</html>