<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>v4</title>
</head>
<body>


<form method="POST" action=".">

	<!-- User Name: <input type="text" name="user_name" /> -->
	Location: <input type="text" name="user_location" />
	<input type="submit" value="Send My Info" />

</form>

<?php
// echo 'Hi '.$_REQUEST["user_name"];
echo $_POST["user_location"].' is a cool place';
?>

	
</body>
</html>