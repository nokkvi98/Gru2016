
<?php
$servername = "tsuts.tskoli.is";
$username = "2107982859";
$password = "lykilord";
$databasename = "2107982859_gru2016";



try{
	$connection = new PDO ("mysql:host=$servername;dbname=$databasename", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected Successfully <br>";
	}
	catch(PDOException $e)
	{
		echo "connection failed: " . $e->getMessage();
	}
	?>	