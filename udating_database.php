<?php
$Name = $_GET['name'];
$I_d = $_GET['id'];
$Mobile = $_GET['mobile'];
$connect = new mysqli("localhost", "root", "", "ICFAI");
$sql = "UPDATE student SET Mobile ='$Mobile' WHERE Id='$I_d'";
if ($connect->query($sql) === TRUE) {
    echo "Update Was Successful!";
}
?>
