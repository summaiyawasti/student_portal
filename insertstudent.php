<?php
$con = mysqli_connect("localhost","root","","studentportal") or die("unable to connect");
session_start();

$sql="INSERT INTO student(rollno,firstname,lastname,studentidno,nationality,religion,address,dob,discipline,year,gender,email,contact)VALUES
('$_POST[rollno]','$_POST[firstname]','$_POST[lastname]','$_POST[studentidno]','$_POST[nationality]','$_POST[religion]','$_POST[address]','$_POST[dob]','$_POST[discipline]','$_POST[year]','$_POST[gender]','$_POST[email]','$_POST[contact]')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

?>