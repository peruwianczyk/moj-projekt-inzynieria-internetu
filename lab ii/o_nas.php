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
	<title>O firmie</title>
</head>

<body>
	
	
	
	

<h1>Menu</h1>
<?php
foreach ($menu as $klucz => $wartosc){
	if($klucz == $aktualna_strona)
	echo "<p>" . $wartosc . "</p>";
else 
	echo "<p><a href=\" $klucz \">" . $wartosc . "</a></p>";
}
?>
<p> Jakieś informacje o firmie.
</p>
</body>
</html>