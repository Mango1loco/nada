<!DOCTYPE html>
<html>
<head>
	<title>Hola</title>
	</head>
<body>
	<form action="index.php" method="get">
		<input type="text" name="nombre">
		<input type="submit">
	</form>
</body>
<?php    
$nombre = $_GET['nombre'];


echo "Hola:" . $nombre . "<br/>";
?>
</html>