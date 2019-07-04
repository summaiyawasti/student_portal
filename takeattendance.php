<?php
session_start();
date_default_timezone_set('Asia/Karachi');
?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="slideshow.css">
</head>
<body>

<form  style="margin-top: 5%;" action="takeatt.php" autocomplete="on" method="post" >
	<h1><mark style="background-color:#87CEEB"><u>MARK ATTENDANCE</u></mark></h1>
	<label>Date Last Class Entered</label><br><br>
	<input type="Date" name="lastclassentered" required>
	<br><br><br>
	<label>Department:  </label>
	<input type="text" name="discipline" required>
	<br>
	<label>Course Code:  </label>
	<input type="text" name="coursecode" required>
	<br>

	<label>Year:  </label>
	<input type="text" name="year" required>
	<br>
	<label>Roll No:   </label>
	<input type="text" name="rollno" required>
	<br>
	<label>Total CLasses Held:   </label>
	<input type="text" name="classesheld" required>
	<br>
	<label>Total Classes Attended:   </label>
	<input type="text" name="present" required>
	<br>
	<button style=" margin-top: 5%;left: 45%;border-style: solid; border-color: black;word-spacing: 3px; color: blue;" type="submit" name="submit" onclick="myfunction()">submit</button>
	<p id="demo" style="margin-top: 10%; margin-left: 44%;" ></p>

</form>

	<script type="text/javascript">
		
		function myfunction(){
			if(department.value.length != 0 || rollno.value.length !=0){
			
			document.getElementById("demo").innerHTML = "successfully submitted" ;
	
		return true;
}
		}
	</script>

</body>
</html>
<!--if(department.value.length != 0 || semester.value.length !=0 || rollno.value.length !=0)-->