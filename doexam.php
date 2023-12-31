
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="fexam/exam.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <script src="fexam/jquery.js"></script>

        <form action="updateenrolledcourses.php" method="post">

        <?php
        include('config.php');
        $code=$_GET["code"];
        $result=mysqli_query($con,"select * from exams where code='$code'");
        session_start();
        //============ this to select student ====================================
        $student_id = $_SESSION['student_id'];
        $selecteds=mysqli_query($con,"select * from student where id=$student_id");
        $rows=mysqli_fetch_array($selecteds);
        while($row=mysqli_fetch_array($result)){
            echo"
            <main>
        <div id='examcontiner'>
            <div id='examheader'>
                <div>
                    <h3>student name : $rows[name]</h3>
                    
                    <p>student code : $rows[id]</p>
                    <p>examing hour : 2 hours</p>
                    
                </div>
                <div>
                  <h3>course name : $row[name]</h3>

                  <input type='text' name='input1' value='$row[name]'/>
                  <input type='text' name='input2' id='inputdegree'/>
                  <input type='text' name='input3'id='inputgrade'/>
                  <input type='text' name='input4' value='$rows[id]'/>
                 

                  <p>course code : $row[code]</p>
                    <p>level : $row[level]</p>

                </div>
                <div>
                    <p>D : adel</p>
                    <p id='distotal'> 0 </p>
                    <p id='grade'> F</p>
                
                </div>
            </div>
            <br>
            <hr>
            <div id='exambody'>
                <br>
                <h1>Question one :-</h1>
                <br>
                <ol type='1'>
                    <li>whats the firs interseting in your lif <br>
                        <br> <input type='radio'/ name='q11' id='q11a'> <label m='1' for='q11a'>ahmed</label>
                        <br> <input type='radio'/ name='q11' id='q11b'> <label m='1' for='q11b'>all</label>
                        <br> <input type='radio'/ name='q11' id='q11c'> <label m='1' for='q11c'>not all</label>
                        <br> <input type='radio'/ name='q11' id='q11d'> <label m='1' for='q11d'>mane</label>
                        <label id='dis1'></label>
                    </li>
                    <br>
                    <li>asser what is the corrested answoer her but not all<br>
                        <br> <input type='radio'/ name='q12' id='q12a'> <label m='2' for='q12a'>all</label>
                        <br> <input type='radio'/ name='q12' id='q12b'> <label m='2' for='q12b'>ahmed hassan</label>
                        <br> <input type='radio'/ name='q12' id='q12c'> <label m='2' for='q12c'>both</label>
                        <br> <input type='radio'/ name='q12' id='q12d'> <label m='2' for='q12d'>not all</label>
                     <label id='dis2'></label>
                    </li>
                    <br>
                    <li>asser how is doing the invetion mention all resourses<br>
                        <br> <input type='radio'/ name='q13' id='q13a'> <label m='3'  for='q13a'>mute</label>
                        <br> <input type='radio'/ name='q13' id='q13b'> <label m='3'  for='q13b'>ever</label>
                        <br> <input type='radio'/ name='q13' id='q13c'> <label m='3'  for='q13c'>sayed adel</label>
                        <br> <input type='radio'/ name='q13' id='q13d'> <label m='3'  for='q13d'>mre</label>
                     <label id='dis3'></label>
                    </li>
                    <br>
                    <li>asser collect all information to send the allmoste ansowerd by camera<br>
                        <br> <input type='radio'/ name='q14' id='q14a'> <label m='4'  for='q14a'>ahmed1</label>
                        <br> <input type='radio'/ name='q14' id='q14b'> <label m='4'for='q14b'>ahmed hassan11</label>
                        <br> <input type='radio'/ name='q14' id='q14c'> <label m='4'  for='q14c'>sayed adel11</label>
                        <br> <input type='radio'/ name='q14' id='q14d'> <label m='4'  for='q14d'>mane ashmoawy</label>
                     <label id='dis4'></label>
                    </li>
                    <br>
                    <li>asser helpe us by published all course for worled<br>
                        <br> <input type='radio'/ name='q15' id='q15a'> <label m='5' for='q15a'>ahmed</label>
                        <br> <input type='radio'/ name='q15' id='q15b'> <label m='5' for='q15b'>ahmed hassan11</label>
                        <br> <input type='radio'/ name='q15' id='q15c'> <label m='5' for='q15c'>sayed adel11</label>
                        <br> <input type='radio'/ name='q15' id='q15d'> <label m='5' for='q15d'>mane ashmoawy11</label>
                     <label id='dis5'></label>
                    
                    </li>
                    
                </ol>
            </div>
            <br>
            <hr>
            <br>
            <div id='examfooter'>
            <div>
                    <p>banisuef university</p>
                    <p>all our patiose</p>
                    
                </div>
                <div>
                    <button id='button' name='send'> sende form</button>
                    
                </div>
                
            </div>
            
            
        </div>
        </main>
            
           ";
        }
        
        ?>
        </form>
        
        
        <script src="fexam/exam.js"></script>
        
        
    </body>
    </html>