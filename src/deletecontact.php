<?php
	include_once 'config.php';
	session_start();
?>

<?php

	$ID = $_SESSION["contid"];	

	$sql = "DELETE FROM contact WHERE contid = '$ID'";

	

		if(mysqli_query($conn, $sql))
		{	
			echo '<script type="text/javascript">'; 
			echo 'alert("Request deletion is successful !");'; 
			echo 'window.location.href = "tour.php";';
			echo '</script>';
		}	
		else
		{
			echo "<script> alert('ERROR : Record not deleted successfully !')</script>";
		}

?>