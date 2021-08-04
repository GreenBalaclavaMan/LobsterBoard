<?php

     session_start();

     //upload coords to our database
     require_once 'scripts/dbc.php';
     $x = $_SESSION['x'];
     $y = $_SESSION['y'];
     $username = $_SESSION['username'];
     $query = "UPDATE `userdata` SET `x` = '$x', `y` = '$y' WHERE `username` = '$username';";
     mysqli_query($conn, $query) or DIE('bad query');

     session_destroy();
     header('location:index.php');

?>
