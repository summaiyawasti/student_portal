<?php



$conn = mysqli_connect("localhost", "root", "", "studentportal"); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
  if(isset($_REQUEST["login"]))
{
  $username=$_REQUEST["user"];
  $password=$_REQUEST["pass"];
  $query2="SELECT * from adminlogin where username='".$username."' && password='".$password."' ";
  
  $result2 = $conn->query($query2);
   if ($result2->num_rows > 0) {
   	echo "succes";
    header("location: admin1.php");
    $_SESSION['login'] =true;
    $_SESSION['username']=$username;
}
  else
  {
  	echo "failed";
    header("location:homepage.php");
  }
}


 ?>

<div id="id02" class="modal">
	
  <form class="modal-content animate"  method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit"   class="loginbtn" name="login" >Login</button>
      <br>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-top: 60pt"> Remember me
      </label>
    </div>
   
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn" style="margin-top: -20pt">Cancel</button>
      <span class="psw" style="margin-top: -20pt"> <a href="#"> Forgot password?</a></span>
    </div>
  </form>
</div>

<button  onclick="document.getElementById('id02').style.display='block'" style="top: 50%;left: 54%; border-style: solid; border-color: black;word-spacing: 3px;">ADMIN LOGIN</button>

<script>
// Get the modal

var modal = document.getElementById('id02');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
     if (event.target == modal) {
        modal.style.display = "none";
    }
    
}
</script>