<?php
$course = $_GET['course'];
$connect=new mysqli("localhost","root","","icfai");
$SQL="select * from student where Course='$course'";
$rs=($connect->query($SQL));
if($rs->num_rows>0){
    echo "Course:";
    while($row=$rs->fetch_assoc()){
    echo $row['Name'];
    }
}
?>
