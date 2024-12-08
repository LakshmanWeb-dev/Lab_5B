<?php

$con = mysqli_connect('localhost', 'root', '', 'Lab_5b');

$matric = isset($_POST['matric']) ? $_POST['matric'] : null;
$name = isset($_POST['name']) ? $_POST['name'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$role = isset($_POST['role']) ? $_POST['role'] : null;


$sql = "INSERT INTO `users`(`matric`, `name`, `password`, `role`) VALUES ('$matric','$name','$password','$role')";

$rs = mysqli_query($con, $sql);

if($rs)
{
    echo "User registration inserted successfully!";
}

?>