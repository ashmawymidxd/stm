<?php
session_start();
if(!isset($_SESSION['student_id'])){
    header('location:login.html');
}
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

    #discount{
        color:blue;
    }
</style>
<body>
    <script src="METHOD/jquery.js"></script>
    <link href="CSS/stylesh.css" rel="stylesheet" type="text/css">
    <div id="header" class="log" style="position: fixed;z-index: 10">
        <img src="img/III.png" class="iii" style="margin-top: 15px;"/>
        <div class="grad">
            <div><img src="img/prand.png" class="card"/><p id="p1">wellcom to our system<br>Students</p></div>
             <h2 style="margin-top:10px;text-align:right" class="h" id="discount"></h2>
            <div id="blue" style="background-color:rgb(0,0,255,0.7)"><a href="logout.php" onclick="return confirm('do you want to remove this account !!');"><img src="img/out.png" id="card1"/></a></div>
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
      <h2 style="margin-top: 50px" class="h" id="">Home page</h2>

       <script>
        //=============== counter vistors ======================= 
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
        make sure everything is as it should be. Getting exams regularly benefits you<br> because if and when something is abnormal, you will get to know 
        </p>
         <br>
        <div id="btn">
            <button class="btn">about honer</button>
            <button class="btn">more info</button>
            <button class="btn">about IT</button>
            <button class="btn">about CS</button>
            <button class="btn">about IS</button>
            <button class="btn">about MM</button>
            <button class="btn">about MD</button>
        </div>
        <script>
            var l=0;
            var her=setInterval(function() {
            window.home.style.left=l++;
            if(l==500){
              clearInterval(her);
            }

            },0);
            setTimeout(function(){
            var l=500;
            var her=setInterval(function() {
            window.home.style.left=l--;
            if(l==0){
              clearInterval(her);
            }
            },1);

            },3500);
        </script>
        <div class="slider">
            <center><br>
                <h1>STUDENT MANAGEMENT SYSTEM </h1>
                <br><img src="IMG/logo%202.png" class="mainlogo"/>
            </center>
            <div class='opacity'>
                <h2>DESIGNED BY AHEMED HASSAN</h2><br>
                <p>requset by D.eissa sabry</p>
            </div>
            <h3 id="time"></h3>
        </div>
        <div class="header">
            <h2 id="hed"></h2>
        </div>
        <div class="paragrafe">
            <h5 id="para"></h5>
        </div>
        <div class="element" style="display:block">
            <center>
            <div class="div"><div class="color"><img class="img" src="IMG/logot.png"></div><br><div>
                <br>
                <button class="btn2">about us</button>
                <br>
                <h2>we online store shoping</h2>
                <br>               
                <p>hello ahmed hassan to our site<br>enjoy now !!</p>
                
            </div></div>
            
            <div class="div"><div class="color"><img class="img" src="IMG/plack%20wlf.png"></div><br><div>
                <br>
              <button class="btn2">our services</button>
                <br>
                <h2>provide you by what to need</h2>
                <br>               
                <p>hello ahmed hassan to our site<br>enjoy now !!</p>
                
            </div></div>
            
            <div class="div"><div class="color"><img class="img" src="IMG/slog.png"></div><br><div>
                <br>
               <button class="btn2">contact us</button>
                <br>
                <h2>we can rieche for you at any time</h2>
                <br>               
                <p>hello ahmed hassan to our site<br>enjoy now !!</p>
                
            </div></div>
            </center>
        </div>
        
        <div class="header last">
            <h2 id="slid1">ABOUT US</h2>
        </div>
        <div class="show" id="show1">
            <p class="words">
                The device store includes all devices that are certified for Teams, including headsets, web cameras, 
                and Teams devices such as Teams Rooms, desk phones, and Teams displays. You can sort, filter,
                 or search to find the device that your organization needs.
                 When you purchase devices from the device store, the payment and fulfillment,
                including shipping and delivery, are handled by UnifiedCommunications.com,
                a Microsoft third-party fulfillment partner.
                You can pay with a credit card or a purchase order.
                Purchase order payment requires one-time setup with the fulfillment provider.
               All orders can be returned up to 30 days after they are delivered.

            </p>
        </div>


        <div class="header last">
            <h2 id="slid2">OUR SERVECIS</h2>
        </div>
        <div class="show" id="show2">
            <p class="words">
            You can view the order history by going to Store > Order history, 
            which includes all orders placed by you and other admins in the organization.
            Order history also includes the shipping status of your orders. 
            For questions about order tracking, returns, or refunds,
            contact UnifiedCommunications.com.
            Their contact information is available on the Order history page.
            Orders placed in the Teams device store and any data associated with them
            are classified as tenant orders and tenant data.

            </p>
        </div>


        <div class="header last">
            <h2 id="slid3">COMMUINCATION</h2>
        </div>
        <div class="show" id="show3">
            <p class="words">
                When you roll out Microsoft Teams, rather than launching with a "blank slate" (no teams or channels), 
                we strongly recommend that you set up a base framework of teams and channels.
                 This helps to prevent "team sprawl," where users create numerous teams when they should be creating 
                 channels in existing teams. To help you get started with a well-designed teams and channels structure,
                  we've created a PowerShell script that creates a team for each of your first and second line people
                   managers, with each manager's direct reports as team members. This is a "point-in-time" 
                   script (it doesn't update your teams or channels automatically when people are added or 
                   removed from an organization). But it's a valuable tool you can use to impose some order on your
                    Teams structure from the start. This script reads your Azure AD, gets a list of managers and their
                     direct reports. 
                It uses this list to create one team per people manager.

            </p>
        </div>
    </div>
    <script src="JAVASCRIPT/animation.js"></script>
</body>
</html>