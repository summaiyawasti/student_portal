<?php
session_start();

$con = mysqli_connect

("localhost","root","","studentportal") or die

("unable to connect");
 $sql="select * from student where 

studentidno ='".$_SESSION

['username']."'";
$run=mysqli_query($con,$sql);
$result=mysqli_num_rows($run);
if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: homepage.php");
  }
?> 


<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
   <link rel="stylesheet" type="text/css" href="slideshow.css">

    
    

     <h1 class="h1,centered"><u><mark style="font-size:30px; background-color:#87CEEB">COURSES REPORT</mark></u> </h1>
<br/>
<hr/>
<!--INITIALS-->
     <form   method="GET" 

>
           <br/>

           <label style="color:rgba(27, 

47, 160, 0.93)">Student Name:</label> 
           <?php  
           $query="select * from student 

where studentidno ='".$_SESSION

['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) 

){
echo"".$row["firstname"]." ".$row

["lastname"];

}
?>
<br>
 <label style="color:rgba(27, 47, 160, 

0.93)">Roll No:</label> 
           <?php  
           $query="select * from student 

where studentidno ='".$_SESSION

['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) 

){
echo"".$row["rollno"];

}
?>
<br> <label style="color:rgba(27, 47, 

160, 0.93)">Batch:</label> 
           <?php  
           $query="select * from student 

where studentidno ='".$_SESSION

['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) 

){
echo"".$row["year"];

}
?>
<br>
    <hr />
        <table class="table" border="1" style="margin-left: 180px;">
            <caption style="font-size:x-large; color:rgba(27, 47, 160, 0.93)"><strong>Enrolled In Regular 

Courses</strong> </caption>
<thead>
            <tr style="color:rgba(27,47, 160, 0.93); font-size:medium">
                
                <th >Course Code</th>
                <th >Course Title</th>
                <th >Course Mode</th>
            </tr>
        </thead>
     <?php
     $query="select * from courses where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) ){
  ?>
        <tr> 
            <td><?php  echo"".$row["coursecode"];?></td>
     <td><?php echo"".$row["coursetitle"];?></td> 
    <td><?php echo"".$row["coursemode"];?></td>
</tr>
   <?php
 }
 ?>
                </table>
    </form>
</body>
</html>
