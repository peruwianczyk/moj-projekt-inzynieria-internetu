<?php

$menu = array(
'index.php'  => 'Strona główna' ,
'o_nas.php'  => 'O firmie' ,
'produkty.php'  => 'Dostępne produkty' 
);


$p = strrpos($_SERVER['PHP_SHELF'],'/');
$aktualna_strona = substr($_SERVER['PHP_SHELF'],$p+1);
$tytul_strony = $menu[$aktualna_strona];
?>
<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Sklep internetowy</title>
</head>

<body>
	
	Maciej Ozdoba sklep internetowy<br /><br />
	
	<a href="rejestracja.php">Rejestracja - załóż darmowe konto!</a>
	<br /><br />
	
	<form action="zaloguj.php" method="post">
	
		Login: <br /> <input type="text" name="login" /> <br />
		Hasło: <br /> <input type="password" name="haslo" /> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

<h1>Menu</h1>
<?php
foreach ($menu as $klucz => $wartosc){
	 if($klucz == $aktualna_strona)
	echo "<p>" . $wartosc . "</p>";
else 
	echo "<p><a href=\" $klucz \">" . $wartosc . "</a></p>";
}
?>



<a href='zmiana_pass.php'>Chcesz zmienić hasło? kliknij tutaj</a>
</body>
</html>