<?php
include("connect.php");
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$sql2 = "INSERT INTO user(mail, pass) VALUES ('$mail', '$pass')";
$result = mysqli_query($con, $sql2);
