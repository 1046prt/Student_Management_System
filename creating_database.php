<?php
$Name = $_GET['sname'];
$I_d = $_GET['id'];
$course = $_GET['course'];
$Email = $_GET['email'];
$Password = $_GET['pwd'];
$Mobile = $_GET['mobile'];
$Dob = $_GET['dob'];
$connect=new mysqli("localhost","root","","icfai");
$SQL="insert into student values( '$Name','$I_d','$course','$Email','$Password','$Mobile','$Dob')";
if($connect->query($SQL)===TRUE){
    echo ("Inserted");
}
?>
