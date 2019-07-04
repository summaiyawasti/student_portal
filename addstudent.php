
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="slideshow.css">
</head>
<body>
 <form   method="post" action="insertstudent.php" autocomplete="on">
  
  <label>First Name:</label> <input type="text" name="firstname" required> 
           <label>Last Name:</label>   <input type="text" name="lastname" required>
           <label>Discipline:</label>  <input type="text" name="discipline" required>
           <label>Roll No:</label>     <input type="text" name="rollno" required>
           <label>Registration No:</label>     <input type="text" name="studentidno" required>
           <label>Batch:</label>       <input type="text" name="year" required>
           <label> Gender:</label>     <input type="text" name="gender" required>
           <label>Date Of Birth:</label>   <input type="text" name="dob" required>
           <label>Contact No:</label>  <input type="text" name="contact" required>
           <label>Email:</label>  <input type="text" name="email" required>
           <label>Address: </label> <input type="text" name="address" required>
           
           <label>Nationality:</label>  <input type="text" name="nationality" required>
           <label>Religion:</label>  <input type="text" name="religion" required>
           <button style=" margin-top: 5%;left: 45%;border-style: solid; border-color: black;word-spacing: 3px; color: blue;" type="submit" name="submit" onclick="myfunction()">submit</button>
           <p id="demo" style="margin-top: 10%; margin-left: 44%;" ></p>

       </form>

<script type="text/javascript">
		
		function myfunction(){
			if(firstname.value.length != 0 || rollno.value.length !=0){
			
			document.getElementById("demo").innerHTML = "successfully added" ;
	
		return true;
}
		}
	</script>

</body>
</html>
