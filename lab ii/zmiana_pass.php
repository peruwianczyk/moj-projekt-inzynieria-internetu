<?php

if(isset($_POST["submit"]))
{
	$con=mysqli_connect("localhost","root","","sklep");
	$us = $_POST["us_name"];
	$pw = $_POST["pass"];
	$pw2 = $_POST["user"];
	mysqli_query($con,"apdejtuj nazwe pass='$pw' where user='$us' and pass='$pw2'");
	if(mysqli_affected_rows($con)==1)
	{
		echo "Powodzenie edycji hasła";
	}
	if(mysqli_affected_rows($con)==0)
	{
		echo "Zła kombinacja";
	}
	mysqli_close($con);
}
?>
	
	<h1>Zmień hasło</h1>
	<form method="post">
	<input type="text" name "us_name" required="required" placeholder=Username" /><br>
	<input type="text" name "user" required="required" /><br>
	<input type="password" name "pass" required="required" placeholder=Password" /><br>
	<input type="submit" name="submit" value="Change" />
	</form>

	
	