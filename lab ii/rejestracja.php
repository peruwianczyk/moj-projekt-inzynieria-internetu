<?php
	session_start();
	
	if ((isset($_POST['nick'] ))  && (isset($_POST['email'])) && (isset($_POST['haslo1'])))
	{
		
		
		
		
		$nick = $_POST['nick'];
		
	
		
		$email = $_POST['email'];
		
		
		
		$haslo1 = $_POST['haslo1'];
	
	
	
		
				
		
		
		$_SESSION['fr_nick'] = $nick;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
	
		
		
		
		require_once "connect.php";
	
		
		
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
			
				echo "Error: ".$polaczenie->connect_errno;
			}
			else
			{
			
				
					
					
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo1', '$email', 100, 100, 100, 14)"))
					{
						
						header('Location: witamy.php');
					}
					
				
				
				$polaczenie->close();
			}
			
		
		
	}
	
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - załóż darmowe konto!</title>
	
	
	
</head>

<body>
	
	<form method="post">
	
		Nickname: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_nick']))
			{
				echo $_SESSION['fr_nick'];
				unset($_SESSION['fr_nick']);
			}
		?>" name="nick" /><br />
		
		
		
		E-mail: <br /> <input type="text" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email" /><br />
		
		
		
		Twoje hasło: <br /> <input type="password"  value="<?php
			if (isset($_SESSION['fr_haslo1']))
			{
				echo $_SESSION['fr_haslo1'];
				unset($_SESSION['fr_haslo1']);
			}
		?>" name="haslo1" /><br />
		
			
		
	
	
		
		
		
		<br />
		
		<input type="submit" value="Zarejestruj się" />
		
	</form>

</body>
</html>