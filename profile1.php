
<!DOCTYPE html>
<html>
<head>
    <title>Student's Profile</title>
	<link rel="stylesheet" type="text/css" href="slideshow.css">
</head>
<body>
   <?php
session_start();
 $conn = mysqli_connect("localhost", "root", "", "studentportal"); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

  
}




?>
    <nav class="nav">
         <p style="text-decoration:underline; color:blue">REPORT GENERATED ON:</p>
        <p id="date"></p>
    </nav>

    
    <h1 class="h1,centered" > <u><mark style="background-color:#87CEEB">STUDENT   PROFILE</mark></u></h1>
   <div class=".div">
       <marquee behavior="scroll" direction="left" class="p.marquee">In case of incorrect information,
       please send the print out of this report with corrected information to the Registrar Office through Class Advisor</marquee>
       <br/>
       <form  class="para"  method="get" action="">
           <br/>

           <label>First Name:</label> <?php  
           $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["firstname"];

}
?>
<br><br>

           <label>Last Name:</label>
           <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["lastname"];

}?> <br><br>
           <label>Discipline:</label>  <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["discipline"];

}?><br><br>
           <label>Roll No:</label>  <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["rollno"];

}?><br><br>
           <label>Batch:</label> <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["year"];

}?> <br><br>
           <label>Gender:</label> <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["gender"];

}?><br><br>
           <label>Date Of Birth:</label> <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["dob"];

}?><br> <br>
           <label>Contact No:</label>  <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["contact"];

}?><br><br>
           <label>Email:</label>  <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["email"];

}?><br><br>
           <label> Address:</label> <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["address"];

}?><br><br>
           
           <label >Nationality:</label> <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["nationality"];

}?><br><br>
           <label >Religion:</label> <?php
            $query="select * from student where studentidno ='".$_SESSION['username']."'";
$result=mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result) ){
echo"".$row["religion"];

}?><br><br>
           
       </form>
</div>
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


<!-- <link rel="stylesheet" type="text/css" href="profilestyle.css" />
    <link rel="stylesheet" type="text/css" href="frontpagestyle.css" />-->