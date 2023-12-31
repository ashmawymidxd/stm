<?php
include('config.php');
//session_start();
//$user_id = $_SESSION['user_id'];
//$data=mysqli_query($con,"select * from car where user_id=$user_id");
$selectedc=mysqli_query($con,"select * from courses");

?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<style>
@media screen and (max-width:750px){
table tr{
display: grid;
grid-template-rows:repeat(auto,1fr);
grid-gap:5px;
}
.sumation{
display:grid;
grid-template-columns:repeat(1,1fr);
grid-gap:1%;
width:90%;
font-size:40px;
}
#return{
font-size: 40px;
}
}
.img{
    margin:10px 0px;
}
table{
    text-align: center;
    margin-top: 10px;
    color:white;
    border-collapse: collapse;
    margin:50px 0px;
    width:95%;
}
table th{
    color:blue;
    text-transform: uppercase;
    background-color: #e2dbdb;
    padding: 10px 0px;
    box-shadow: -2px -2px 7px 0px #ffffff , 5px 5px 10px 0px rgb(0, 0, 0,0.45);
    height:50px;
    font-size:20px;
    font-family: monospace;
    border:none;
}


 tr:nth-child(even){
 
    background-color:#efebeb;
    color:blue;
}
tr:nth-child(odd){
    background-color: #dcdff;
    color:blue;
}
tbody td:first-child{
   
    cursor: pointer;
    background-color:dddddd;
    color:blue;
    font-size:25px;
    transition-duration: 500ms;
    padding:0px 5px;
    border:none;
}
th,td{
   border-left:1px solid #fff;
}
td{
   border-bottom:1px solid #fff;
}
#form{
    width:90%;
    margin:50px 0px;
    padding:2%;
}
.aa{
    background-color:blue;
    color:white;
}
#cent{
        width:30px;
        margin:10px 10px;
    }


#card1{
        width:40px;
        margin:4px 6px;
}
#search{
        text-align: center;
        width:30%;
        height:80px;
        font-size:60px;
        border-radius:20px;
        color:#0a1a96;
    }
</style>
<body>
<script src="METHOD/jquery.js"></script>
    <link href="CSS/stylesh.css" rel="stylesheet" type="text/css">
    <link href="CSS/styleadmin.css" rel="stylesheet" type="text/css">
    <div id="header" class="log">
        <div class="grad">
            <div><img src="img/prand.png" class="card"/><p id="p1" >welcom man to<br>box coding</p></div>
            <div id="blue"><img src="img/search.png" id="cent" class="card1"/></div>
           
        </div>
    </div>
    
    <center>
        <form id="form" action="delete_from_car.php" method="post">
        <h2 style="padding:50px 0px;font-size:30px" class="h2" id="discount"> <a href="admin.php"><img src="IMG/return.png" alt="" width=23></a> ALL COURSES : </h2>
        <center>
        <br>
        <input type="text" id="search" class="search2" placeholder="search">
        </center>
        <table>  
                <tr>
                    <th>code</th>
                    <th>name</th>
                    <th>level</th>
                    <th>department</th>
                    <th>type</th>
                    <th>update</th>
                    <th>delete</th>
                    <th>exams</th>
                </tr>
        <tbody id="tbody">
        <?php
        while($row=mysqli_fetch_array($selectedc)){
        echo"<tr>";
        echo"<td>$row[0]</td>";
        echo"<td>$row[1]</td>";
        echo"<td>$row[2]</td>";
        echo"<td>$row[3]</td>";
        echo"<td></td>";
        echo"<td> <a href='editc.php ?id=$row[0]' class='aa'>update</a></td>";
        echo"<td> <a href='deletec.php ?id=$row[0]' class='aa'>delete</a></td>";
        echo"<td> <a href='addexam.php ?id=$row[0]' class='btna'>add exam</a></td>";
        echo"</tr>";
       } 
        ?>
        
        </tbody>
</table>
</form>

</center>
<script>
function counters(){
    var table=document.getElementsByTagName("tr");
    var num=0;
    for(i=1;i<table.length;i++){
        num+=1;
    }
    window.discount.innerHTML+=num;
}
counters();
 
</script>
<script src="JAVASCRIPT/animation.js"></script>
</body>
</html>