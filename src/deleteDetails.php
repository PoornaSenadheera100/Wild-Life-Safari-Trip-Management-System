<?php
	include_once 'config.php';
	session_start();
?>

<?php

	$ID = $_SESSION["BID"];	

	$sql = "DELETE FROM booking WHERE BID = '$ID'";

	

		if(mysqli_query($conn, $sql))
		{	
			echo '<script type="text/javascript">'; 
			echo 'alert("Booking Cancellation is successful !");'; 
			echo 'window.location.href = "tour.php";';
			echo '</script>';
		}	
		else
		{
			echo "<script> alert('ERROR : Record not deleted successfully !')</script>";
		}

?>