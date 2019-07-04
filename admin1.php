
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="slideshow.css">
</head>
<body>

	 <img src="homepage pics\logo.png" style="top: 0px;position: absolute; padding: 0px;">
	<img src="homepage pics\images.png" style="margin-left: 520px;">
	<a style="color:blue; font-size:18px" href="logout.php" >LOG OUT</a> 
<a href="takeattendance.php" target="_blank"> <button style="top: 60%;left: 25%;border-style: solid; border-color: black; word-spacing: 3px; color: blue; ">TAKE ATTENDANCE</button></a>

<a href="addstudent.php" target="_blank"> <button  style="top: 60%;left: 50%; border-style: solid; border-color: black;word-spacing: 3px; color: blue;">ADD STUDENT</button></a>

  
         </div>
<p class="footer" style="height: 10px; margin-top: 50px;width: 100%;margin-left:  -840px"> NED University of Engineering & Technology . Design by I.T Department</p>

</body>
</html>
 <?php
session_start();
  if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: homepage.php");
  }
    ?>