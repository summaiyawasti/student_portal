<!DOCTYPE html>
<html>
<head>
    <title>STUDENT LOGIN</title>
    <link rel="stylesheet" type="text/css" href="studentlogin.css" />
 <style type="text/css">
body {
    overflow:hidden;
}
</style>
</head>
<body>
  
 

    <nav class="nav">
        <div >
            <span><b>Date: </b></span>
            <span id="date" style="color:blue"></span>
        </div>
    </nav>
    <nav class="nav">

        <div>

        <a style="color:blue; font-size:117.5x" href="logout.php" target="_parent">LOG OUT</a>  
         </div>
    </nav>
    <h1 class="h1" style="color: black"> <u>STUDENT  LOGIN</u></h1>

    <img src="homepage pics\logo.png" style="top: 0px;position: absolute; padding: 0px;">
   
    <form action="" method="get">
        <marquee behavior="scroll" direction="left" class="p.marquee" style="position:page; margin-top:0px">
            You Are Logged In As User = <?php 
            session_start();
               echo "".$_SESSION['username'];
               if(!isset($_SESSION['login'])){ //if login in session is not set
    header("Location: homepage.php");
  }
            ?>
             
        </marquee>
    </form>
  <p class="footer" style="height: 10px; margin-top: 50px;width: 100%"> NED University of Engineering & Technology . Design by I.T Department</p>

     <!--not done log out codeeeeeeeeeeeeee-->
     <script>
        var modal = document.getElementById('LO');
        window.onclick=function(event){
            if (event.target == modal) {
                modal.style.display = "block";
            }
            }
    </script>
   <div class="box" style="margin-left: 0px;width: 100%">
      <a href="profile1.php" target="_blank">  <button style=" text-align:  center; letter-spacing: 5px;
 
  font-size: 17.5px;
  background-color:#87CEEB;
 
    cursor: pointer;
  padding: 10PX;
 color: white;  "> VIEW  PROFILE</button></a>
       <a href="viewattendance.php" target="_blank"> <button style=" text-align:  center; letter-spacing: 5px;
  
  font-size: 17.5px;
  background-color:#87CEEB;

    cursor: pointer;
  padding: 10PX;
 color: white;  "> ATTENDANCE </button></a>
     <a href="course.php" target="_blank">  <button style=" text-align:  center; letter-spacing: 5px;

  font-size: 17.5px;
  background-color:#87CEEB;
 margin-top:   70px;
    cursor: pointer;
  padding: 10PX;
 color: white;  "> COURSES </button></a>
      <a href="https://www.neduet.edu.pk/sites/default/files/users/student_affairs/List%20of%20Scholarships.pdf" target="_blank">  <button style=" text-align:  center; letter-spacing: 5px;
 
  font-size: 17.5px;
  background-color:#87CEEB;
   
    cursor: pointer;
  padding: 10PX;
 color: white;  ">  SCHOLARSHIPS </button></a>
     <a href="https://www.neduet.edu.pk/internships" target="_blank">   <button style=" text-align:  center; letter-spacing: 5px;

  font-size: 17.5px;
  background-color:#87CEEB;
 
    cursor: pointer;
  padding: 10PX;
 color: white;  "> INTERNSHIPS </button></a>
        <a href="http://nedapps.neduet.edu.pk:8080/undergrad/userLogin.jsp" target="_blank"> <button style=" text-align:  center; letter-spacing: 5px;
 
  font-size: 17.5px;
  background-color:#87CEEB;
    
    cursor: pointer;
  padding: 10PX;
 color: white;  "> SEMESTER REGISTRATION</button></a>
</div>
    
    

    <script type="text/javascript">
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth();
        d = n.getDate();
        document.getElementById("date").innerHTML = "   " + m + " , " + d + ", "  + y + "   ";         
    </script>
</body>
</html>
