<?php
session_start();

$con = mysqli_connect("localhost","root","","studentportal") or die("unable to connect");
 $sql="select * from student where studentidno ='".$_SESSION['username']."'";
$run=mysqli_query($con,$sql);
$result=mysqli_num_rows($run);
if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: homepage.php");
  }
?> 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="slideshow.css">
<style>
table,th,td{
  border: 1px solid black;
 padding: 10px;
 font-family:  "Source Sans Pro", sans-serif ;
}
th{
	color: blue ;
	background-color: rgba(0,0,0,0.2);
}

</style>
</head>
<body>
	<h1 class="h1,centered"  > <u><mark style="background-color:#87CEEB">ATTENDANCE</mark></u></h1>

       <form   method="GET" action="home1.php">
           <br/>

           <label style="color:rgba(27, 47, 160, 0.93)">Student Name:</label> 
           <?php  
           $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["firstname"]." ".$row["lastname"];
}
?>
<br>
 <label style="color:rgba(27, 47, 160, 0.93)">Roll No:</label> 
           <?php  
           $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["rollno"];
}
?>
<br> <label style="color:rgba(27, 47, 160, 0.93)">Batch:</label> 
           <?php  
           $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["year"];
}
?>
<br> <label style="color:rgba(27, 47, 160, 0.93)">Discipline:</label> 
           <?php  
           $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($con,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["discipline"];
}
?>	 
</form>
<nav class="nav">
         <p style=" color:blue;font-family: sans-serif ;">Report Generated On:</p>
        <p id="date"></p>
    </nav>

<table style="width:100% ; margin-top: 30px">
	<caption style="color: blue;font-family:  "Source Sans Pro", sans-serif ; ><u><b>THEORY</b></u></caption>
  
    <thead><tr>
    <th>Course code</th>

    	<th>Last Class Entered</th>
    	<th>Classes Held</th>
    	<th>Present</th>
    	<th>Percentage</th> </tr>
</thead>
 

  <?php
     $query1="select * from attendance where studentidno='".$_SESSION['username']."'";
$result1=mysqli_query($con,$query1);
while ($row= mysqli_fetch_assoc($result1) ){
  ?>
        <tr> 
            <td><?php  echo"".$row["coursecode"];?></td>
     <td><?php echo"".$row["lastclassentered"];?></td> 
    <td><?php echo"".$row["classesheld"];?></td>
    <td><?php echo"".$row["present"];?></td>
<td><?php echo"".$row["percentage"];?></td>

</tr>
   <?php
 }
 ?>
</table>


 <script type="text/javascript">
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth();
        d = n.getDate();
        h= n.getHours();
        t = n.getMinutes();
        document.getElementById("date").innerHTML = " " + d+ "-" + m+ "-" + y+ "   "+ h+ ":" + t+ "";
        
    </script>

</body>
</html>
 