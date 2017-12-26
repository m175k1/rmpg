<?php
//if "email" variable is filled out, send email


include("config.php");
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$cel=$_POST['cp'];
	$email=$_POST['email'];
	$message=$_POST['memo'];
	$today = date("F j, Y, g:i a");   
	// checking empty fields
	if(empty($name))
	{
		//if name field is empty
	
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	
	
	$sql = "INSERT INTO messages (name, email, cel, message, date)
VALUES ('$name', '$email', '$cel', '$message', '$today')";
if ($conn->query($sql) === TRUE) {
    echo "<h1>THANK YOU!</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
	}
}
	
$conn->close();
?>