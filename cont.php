<?php
 
  $db = mysqli_connect("localhost","root","","contact");

 
if(isset($_POST['send']))
{
   	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$query = "INSERT INTO `contact data` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
	$result = mysqli_query($db,$query);

	if($result){
		echo "<h2>Thanks , your request submitted. </h2>";
		exit();
	}
	else{
		echo"Database Not Connected";
	}

}
?>
