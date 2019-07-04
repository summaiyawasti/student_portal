<?php
$con = mysqli_connect("localhost","root","","studentportal") or die("unable to connect");
if(isset($_POST['submit']))
	{
$id=$_POST['rollno'];
$coursecode=$_POST['coursecode'];
$discipline=$_POST['discipline'];
$lastclassentered=$_POST['lastclassentered'];
$year=$_POST['year'];
$classesheld=$_POST['classesheld'];
$present=$_POST['present'];
$percentage=($present/$classesheld)*100;
$sql="UPDATE attendance SET  lastclassentered='$lastclassentered', classesheld=$classesheld, present=$present, percentage=$percentage where (rollno='".$id."' && coursecode='".$coursecode."')";
if (mysqli_query($con, $sql)) {
    echo "Updated record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
}

?>