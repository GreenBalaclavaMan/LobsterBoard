<?php
     $conn = mysqli_connect('localhost','root','','db_lobsterboard');//or DIE('No Connection');
	// Check connection
	if (!$conn) {
	  die("Database Connection [ FAILED ] " . mysqli_connect_error());
	}
	echo "Database Connection [ OK ]";
?>
