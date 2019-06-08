<?php
session_start();
if(isset($_SESSION['zalogowany']))
	{
		header('location:index2.php');
		exit();
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Witam na mojej stronie</title>
</head>
<body>

<form action="logowanie.php" method="post">
Login:<br/>
<input type="text" name="login"><br/>
Hasło:<br/>
<input type="password" name="haslo"><br/><br/>
<input type="submit" value="OK">
</form>
<?php
if(isset($_SESSION['blad']))
{
	echo $_SESSION['blad'];
}
?>

</body>
</html>