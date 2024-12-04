<?php
$Name = $_GET['name'];
$I_d = $_GET['id'];
$connect=new mysqli("localhost","root","","icfai");
$SQL="DELETE from student WHERE Id='$I_d'";
if($connect->query($SQL)===TRUE){
    echo "Student data is removed from database.";
}
?>
