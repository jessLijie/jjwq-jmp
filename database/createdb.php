<?php
$con = mysqli_connect("localhost", "root", "jkty12138");
if (!$con) {

    die('Could not connect: ' . mysqli_connect_error());

}
if (mysqli_query($con,"CREATE DATABASE jjwq_jmp")) {

    echo "Database created";

} else {

    echo "Error creating database: " . mysqli_connect_error();

}
mysqli_close($con);
?>
