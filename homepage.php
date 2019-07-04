
<!DOCTYPE html>
<html lang="en">
<head>
	<title> home </title>
<link rel="stylesheet" type="text/css" href="slideshow.css">
<style type="text/css">
body {
    overflow-x:hidden;
}
</style>
</head>

 
<body>

<marquee style=""   behavior="scroll" direction="left" class="marquee" ><img src="homepage pics\download.png" style="height: 24px;width: 20px"> Admit cards are now availaible  </marquee>

<nav id="this">
	<a href="#this"> <img src="homepage pics\house-xxl.png" class="navimg" ></a> 
	<a href="https://www.neduet.edu.pk/university_organization" target="_blank"><img src="homepage pics\email-icons-navy-blue-595349-4835294.png" class="navimg" /></a> 
<a href="https://www.neduet.edu.pk/contact-us" target="_blank"><img src="homepage pics\blue-phone-icon-png-clipart-best-12625.png" class="navimg"></a> 

<a href="https://www.facebook.com/edvolution.neduet/" target="_blank"><img src="homepage pics\facebook-icon-white-logo-png-transparent.png" class="navimg">
	</a>
	<a href="https://twitter.com/ned_academy?lang=en"  target="_blank"><img src="homepage pics\twitter.png" class="navimg" >
	</a>

</nav>
<!--navigation bar links-->
<a href="https://www.neduet.edu.pk/institutional_policies" target="_blank"><h6 style=" margin-left:1110px">INSTITUTIONAL POLICIES</h6></a>
<a href="https://www.neduet.edu.pk/academic_calendar" target="_blank"><h6 style=" margin-left:900px">ACADEMIC CALENDAR</h6></a>
<a href="https://www.neduet.edu.pk/students_affairs" target="_blank" ><h6 style=" margin-left:720px">STUDENT AFFAIRS</h6></a>
<!--login controls-->
<?php
session_start();
 $conn = mysqli_connect("localhost", "root", "", "studentportal"); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_REQUEST["submit"]))
{
  $username=$_REQUEST["username"];
  $password=$_REQUEST["password"];
  $query="SELECT * from studentlogin where regno='".$username."' && password='".$password."' ";
  
  $result = $conn->query($query);
   if ($result->num_rows > 0) {
    header("location: studentlogin.php");
    $_SESSION['login'] =true;
    $_SESSION['username']=$username;
}
  else
  {
    header("location:homepage.php");
  }
}
  include 'adminlogin.php';
?>

<div id="id01" class="modal">
	
  <form class="modal-content animate"  method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit"   class="loginbtn" name="submit" >Login</button>
      <br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-top: 60pt"> Remember me
      </label>
    </div>
   
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="margin-top: -20pt">Cancel</button>
      <span class="psw" style="margin-top: -20pt"> <a href="#"> Forgot password?</a></span>
    </div>
  </form>
</div>
<button onclick="  document.getElementById('id01').style.display='block'" style="top: 50%;left: 30%;border-style: solid; border-color: black; word-spacing: 3px;">STUDENT LOGIN</button>


<script>
// Get the modal

var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     if (event.target == modal) {
        modal.style.display = "none";
    }
    
}
</script>

<!--ned logo-->
<img src="homepage pics\logo.png" style="top: 0px;position: absolute; padding: 5px;">

<!--slideshow pictures-->
<div >
	<img class="mySlides" src="homepage pics\ned.jpg" style="height: 500px; background-position: center;background-repeat: no-repeat;		 background-size: cover;margin-top: 70px;margin-bottom: 60px;width: 1338px">
 
  <img class="mySlides" src="homepage pics\WhatsApp Image 2019-04-13 at 1.57.32 PM.jpeg" style="height: 500px; background-position: center;background-repeat: no-repeat;background-size: cover;margin-top: 70px;margin-bottom: 60px;width: 1338px">
   <img class="mySlides" src="homepage pics\52920230_2085208641765268_3438839353080545280_n.jpg" style="height: 500px; background-position: center;background-repeat: no-repeat;background-size: cover;margin-top: 70px;margin-bottom: 60px;width: 1338px">
    <img class="mySlides" src="homepage pics\50334225_2282259468472176_5933637885113663488_n.jpg" style="height: 500px; background-position: center;background-repeat: no-repeat;background-size: cover;margin-top: 70px;margin-bottom: 60px;width: 1338px; object-fit: cover;">

<img class="mySlides" src="homepage pics\WhatsApp Image 2019-04-13 at 7.24.17 PM (2).jpeg" style="height: 500px; background-position: center;background-repeat: no-repeat;background-size: cover;margin-top: 70px;margin-bottom: 60px;width: 1338px; object-fit: cover;">
 <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>

<!--welcome to student portal-->
</div>
<div class="centered"><br>
<h1 style="font-size: 30px"><mark style="background-color: rgba(0,0,0,0.7); padding: 10px ; color: white; text-shadow: 4px 4px black;"> WELCOME TO </mark></h1>
<h1 style="  color:black ; font-size: 45px; line-height: 40%; background-position: center;background-size: 200PX"><mark style="background-color: #87CEEB ; color: white; opacity: 0.85; padding: 6px; text-shadow: 4px 4px black">   STUDENT PORTAL</mark> </h1></div>  
  </div>

	<!--Small pics below-->
	<a href="https://academy.neduet.edu.pk/"target="_blank"><img   class="pics" onmouseover="bigimg(this)" onmouseout="normalimg(this)"  src="homepage pics\books_44165520_xxl.jpg"></a>
	
	<a href="http://nedapps.neduet.edu.pk:8080/vpn/index.jsp" target="_blank"><img class="pics" onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="homepage pics\3.png" style="margin-left: 10px; "></a>
	<a href="http://neduet.rozee.pk/"target="_blank"><img class="pics" onmouseover="bigimg(this)" onmouseout="normalimg(this)" src="homepage pics\1.jpg" style="margin-left: 10px;"></a>
	<!--small pics headings-->
<h4 style="margin-top: -110px;margin-left: 5px;text-align: center"><mark class="h4mark" >NED ACADEMY</mark></h4>
<h4 style="margin-top: -70px;margin-right:640px"><mark class="h4mark" style="padding: 15px;">DIGITAL </mark></h4>
<br/>
<h4 style="margin-top: -22px;margin-right:640px"><mark class="h4mark">LIBRARY</mark></h4>
<h4 style="margin-top: -80px;margin-left:640px"><mark class="h4mark">JOB PORTAL</mark></h4>
<!--discover more-->
<h4  style="margin-top: -240px;margin-left:-120px;color: black;font-size: 30px;text-shadow: 1px 1px black
">DISCOVER</h4>
<h4  style="margin-top: -74.5px;margin-left:210px;color: skyblue;font-size: 30px;text-shadow: 1px 1px skyblue
 ">MORE</h4>

<!--footer-->
<p style="margin-top: 800px;" class="footer"> NED University of Engineering & Technology . Design by I.T Department</p>
	
 <script >
 	function bigimg(x) {
 		x.style.height="250px";
 		x.style.width="350px";
 		
 	}
 	function normalimg(x){
 		x.style.height="200px";
 		x.style.width="300px";
 	}
 </script>




<script>
	var myIndex = 0;
carousel();
function carousel() {
  var i;

  var x = document.getElementsByClassName("mySlides");
 for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }

  slides[slideIndex-1].style.display = "block";  
 
}

</script>

</body>
</html>