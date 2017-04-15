<?php

if (isset($_POST['send'])){
		$db_host ="localhost";
		$db_username ="root";
		$db_password ="";
		$db_name="camp";
		$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());





		$sql1 =  "INSERT INTO request_tent(nameofborrower, contactno, wheretodeliver, quantity, tentsize, date1, timeofdeliver) VALUES ('".$_POST['name']."','".$_POST['contact']."','".$_POST['wheretodeliver']."','".$_POST['quantity']."','".$_POST['inlineRadioOptions']."','".$_POST['date1']."','".$_POST['timeofdeliver']."')";

		mysqli_query($db_connect,$sql1);


		if($db_connect-> query($sql1) === TRUE){
		echo"<script> type='text/javascript'>alert('Success! your request was sent! ') </script>";
		header("Location: request_tent.php");
		}
		else{
		echo"<script> type='text/javascript'>alert('Failed!" . $sql1 . "<br>"  . $db_connect->error."') </script>";
		}

//Connection

	$db_connect->close();

}
?>
