<?php
include('config.php');
session_start();
//============ this to select student ====================================
$student_id = $_SESSION['student_id'];
$selecteds=mysqli_query($con,"select * from student where id=$student_id");
//============ this to select student level ==============================
$selected=mysqli_query($con,"select * from student where id=$student_id");
$custom=mysqli_fetch_array($selected);
$_SESSION['student_level'] = $custom['level'];
$student_level=$_SESSION['student_level'];
//============ this to select avilable courses for this student ==========
$avilable=mysqli_query($con,"select * from courses where level='$student_level'");
//============ this to select student exame for  enrolled courses for this student ==========
$enrolled=mysqli_query($con,"select * from enrolled_courses where student_id=$student_id and level=' $student_level'");
//============ this to select allenrolled courses for this student ==========
$allenrolled=mysqli_query($con,"select * from enrolled_courses where student_id=$student_id and level in(' $student_level',' second level',' first level')");
?>

<html>
<head>
<title> ashawy design</title>
</head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    #card1{
        width:40px;
        margin:5px 5px;
    }
    #blue:hover{
        background-color:red;
    }
    #home{
        position:relative;
    }
    #discount::before{
    content:'VISTOR : ';
    }
    #clock::before{
        content:'TIME : ';
    }

    #discount{
        color:blue;
    }
    #selecteds{
        background-color:blue;
        color:white;
    }
.sumation{
display:grid;
grid-template-columns:repeat(3,1fr);
grid-gap:10%;
width:90%;
}
.counter{
 background-color:#ddd;
 color:blue;
 font-size:40px;
 font-family: monospace;
 padding:10px 0px;
 border-radius: 20px;
 margin-top:40px;
}
.counters{
color:blue;
font-size:50px;
font-family: monospace;
padding:5px 0px;
border-radius: 20px;
width:90%;
}
.counters h6{
    background-color:#ddd;
    display:inline-block;
    margin-right:6%;
    border-radius: 20px;
}

</style>
<body>
    <script src="METHOD/jquery.js"></script>
    <link href="CSS/stylesh.css" rel="stylesheet" type="text/css">
    <link href="CSS/styleadmin.css" rel="stylesheet" type="text/css">
    <link href="CSS/styletable.css" rel="stylesheet" type="text/css">
    <div id="header" class="log" style="position: fixed;z-index: 10">
        <img src="img/III.png" class="iii" style="margin-top: 15px;"/>
        <div class="grad">
            <div><img src="img/prand.png" class="card"/><p id="p1">wellcom man too<br>Box Coding</p></div>
             <h2 style="margin-top:10px;text-align:right" class="h" id="discount"></h2>
            <div id="blue" style="background-color:rgb(0,0,255,0.7)"><a href="login.html" onclick="return confirm('do you want to log out now !!');"><img src="img/logout.png" id="card1"/></a></div>
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
      <h2 style="margin-top: 50px" class="h">Student : <?php echo($custom['name'])?></h2>
       <script>
        function updatecounter(){
            var count=localStorage.getItem("count");
            if(count===null){
                count=0;
            }
            count++;
            localStorage.setItem("count",count);
            var counter =document.getElementById("discount");
            counter.innerHTML=count;
        }
        window.onload=updatecounter;



       </script>
        <br>
        <p> 
        make sure everything is as it should be. Getting exams regularly benefits you<br> 
        because if and when something is abnormal, you will get to know 
        </p>
         <br>
        <div id="btn">
            <button class="btn" id="allelement"> my information</button>
            <button class="btn">registration</button>
            <button class="btn">cirent courses</button>
       </div>
    <div id="selecteds">
     <table>  
                <tr>

                    <th>id</th>
                    <th>image</th>
                    <th>name</th>
                    <th>gba</th>
                    <th>hour</th>
                    <th>present</th>
                    <th>department</th>
                    <th>password</th>
                    <th>level</th>
                </tr>
                <tbody id="tbody">
        <?php
        $counter=0;
        while( $row=mysqli_fetch_array($selecteds)){
        echo"<tr>";
        echo"<td>$row[id]</td>";
        echo"<td><img src='$row[image]' width=100/></td>";
        echo"<td>$row[name]</td>";
        echo"<td>$row[gba]</td>";
        echo"<td>$row[hour]</td>";
        echo"<td>$row[present]</td>";
        echo"<td>$row[department]</td>";
        echo"<td>$row[password]</td>";
        echo"<td>$row[level]</td>";
        echo"</tr>";
        $counter++;
       } 
        ?>
        
        </tbody>    
     </table>
    </div>
    <br>
    <div id="avilableexams">
            <center>
            <?php
        include('config.php');
        $result=mysqli_query($con,"select * from exams where level=' $student_level'");
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
                             <h2 class='hi'>course code :$row[code]</h2>
                           <a href='doexam.php ?code=$row[code]' class='aa'>examing</a>
                <a href='#session.php ?code=$row[code]' class='aa'>not now</a>
                </div>
            </main>
            </center>";
        }
        ?>
            </center>
        </div>

    


     
</div>
        <script>
              setInterval(function(){window.clock.innerHTML =new Date().toLocaleTimeString();},1000);
              setInterval(function(){window.clock2.innerHTML =new Date().toLocaleTimeString();},1000);
        </script>
         <script src="JAVASCRIPT/animation.js"></script>
    </body>
</html>