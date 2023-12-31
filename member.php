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
//============ this to select enrolled courses for this student ==========
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
    #btn button:focus{
        background-color:blue;
       color:white;
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
            <button class="btn" id="myinfo">profile</button>
            <button class="btn" id="registration">registration</button>
            <button class="btn" id="current">current courses</button>
            <button class="btn" id="allcourses">all courses</button>
            <button class="btn"><a href="avilableexam.php"class="btna">exams</a></button>
            <button class="btn">degree</button>
            <button class="btn">project graduation</button>
            <button class="btn">Suporting</button>
            
       </div>


    <!-- profile -->
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
                echo"<td><img class ='img'src='$row[image]'/></td>";
                echo"<td>$row[name]</td>";
                echo"<td>$row[gba]</td>";
                echo"<td>$row[hour]</td>";
                echo"<td id='distot'>11</td>";
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
    <!-- avilable corses -->
    <div id="availablec">
      <form action="member.php" method="post" class="form">
        <center>
            <h2 style="padding:50px 0px;font-size:30px;margin-top:70px" class="h2">AVILABLE COURSES</h2>
        </center>
        <table>  
                    <tr>
                        <th>code</th>
                        <th>name</th>
                        <th>level</th>
                        <th>department</th>
                        <th>hour</th>
                        <th>remove</th>
                        <th>add</th>
                    </tr>
            <tbody id="tbody">
            <?php
            while($row1=mysqli_fetch_array($avilable)){
            echo"<tr>";
            echo"<td class='tdblue'>$row1[0]</td>";
            echo"<td class='tdblue'>$row1[1]</td>";
            echo"<td class='tdblue'>$row1[2]</td>";
            echo"<td class='tdblue'>$row1[3]</td>";
            echo"<td class='tdblue'>3</td>";
            echo"<td> <a href='removec.php ?id=$row1[0]' class='aa'><img src='IMG/remove.png' class='icon'/></a></td>";
            echo"<td> <a href='addc.php ?id=$row1[0]' class='aa'><img src='IMG/add.png' class='icon'/></a></td>";
            echo"</tr>";
            }?>
            </tbody>
            </table>
       </form>
    </div>
    <br>
    <!-- enrolle now corses -->
    <div id="enrolledc">
        <form action="" class="form">
            <center>
                <h2 style="padding:50px 0px;font-size:30px;margin-top:70px" class="h2">ENROLLED <strong style='color:blue'>COURSES</strong></h2>
            </center>
            <center>
                <div class="counters">
                        <h6>STU: <?php echo($custom['name']);?></h6>
                        <h6 id="clocke">D: FAHED</h6>
                        <h6 id="datee">D: ADEL</h6>
                    </div>
            </center>
            <table>  
                        <tr>
                            <th>code</th>
                            <th>name</th>
                            <th>level</th>
                            <th>hour</th>
                            <th>degree</th>
                            <th>grade</th>
                        </tr>
                <tbody id="tbody">
                <?php
                $counter=0;
                while($row11=mysqli_fetch_array($enrolled)){
                echo"<tr>";
                echo"<td class='tdblue'>$row11[1]</td>";
                echo"<td class='tdblue'>$row11[name]</td>";
                echo"<td class='tdblue'>$row11[3]</td>";
                echo"<td class='tdblue'>3</td>";
                echo"<td class='tdblue'>$row11[degree]</td>";
                echo"<td class='tdblue'>$row11[grade]</td>";
                echo"</tr>";
                $counter++;
            } 
                ?>
                </tbody>
            </table>
            <center>
                    <div class="sumation">
                        <div class="counter">
                        <h5>COUR NUM : <?php echo($counter);?></h5>
                        </div>

                        <div class="counter ccc">
                            <h5 id="clock"></h5>
                        </div>

                        <div class="counter last">
                            <h5>DATE:<script>var Dat=new Date().toLocaleDateString("en"); document.write(Dat)</script></h5>
                        </div>
                    </div>
            </center>
        </form>
    </div>

     <br>

     <!-- allEnrolledCorses -->
    <div id="allenrolledc">
        <form action="" class="form">
            <center>
                <h2 style="padding:50px 0px;font-size:30px;margin-top:70px" class="h2">ALL ENROLLED COURSES</h2>
            </center>
            <center>
                <div class="counters">
                        <h6>STU: <?php echo($custom['name']);?></h6>
                        <h6 id="clocke">D: FAHED</h6>
                        <h6 id="datee">D: ADEL</h6>
                    </div>
            </center>
            <table id="tbody2">  
                        <tr>
                            <th>code</th>
                            <th>name</th>
                            <th>level</th>
                            <th>hour</th>
                            <th>degree</th>
                            <th>grade</th>
                        </tr>
                <tbody id="tbody">
                <?php
                $counter=0;
                while($row111=mysqli_fetch_array($allenrolled)){
                echo"<tr>";
                echo"<td class='tdblue'>$row111[1]</td>";
                echo"<td class='tdblue'>$row111[2]</td>";
                echo"<td class='tdblue'>$row111[3]</td>";
                echo"<td class='tdblue'>3</td>";
                echo"<td class='tdblue'>$row111[degree]</td>";
                echo"<td class='tdblue'>$row111[grade]</td>";
                echo"</tr>";
                $counter++;
            } 
                ?>
                </tbody>
            </table>
            <center>
                    <div class="sumation">
                        <div class="counter">
                        <h5 id='alld'><?php echo($counter);?></h5>
                        </div>

                        <div class="counter ccc">
                            <h5 id="clock2"></h5>
                        </div>

                        <div class="counter last">
                            <h5>DATE:<script>var Dat=new Date().toLocaleDateString("en");
                             document.write(Dat)</script></h5>
                        </div>
                    </div>
            </center>
        </form>
    </div>
     <br>
</div>
        <script>
              setInterval(function(){window.clock.innerHTML =new Date().toLocaleTimeString();},1000);
              setInterval(function(){window.clock2.innerHTML =new Date().toLocaleTimeString();},1000);
        </script>
        <script>
            function gettotal(){

            var fholds2=0;
            var ftables2=document.getElementById("tbody2");
            for(let i=1;i<ftables2.rows.length;i++){
            fholds2+=parseInt(ftables2.rows[i].cells[4].innerHTML);

            }
            var alld=parseInt(window.alld.innerHTML);
            window.distot.innerHTML=alld;

            window.distot.innerHTML=(((fholds2)/(alld*100))*100).toFixed(1);
            }
            window.hover=gettotal();

        </script>
         <script src="JAVASCRIPT/animation.js"></script>
    </body>
</html>