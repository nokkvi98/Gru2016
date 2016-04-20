

<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>

		<?php


		include "dbcon.php";

		echo $_POST['fname'] . "<br>";
		echo $_POST['lname'] . "<br>";
		echo $_POST['phone'] . "<br>";
		echo $_POST['email'] . "<br>";
		echo $_POST['tommur'] . "<br>";

		$verd = 0;

		if (isset($_POST['alegg'])) 
		{
			foreach ($_POST['alegg'] as $postalegg) 
			{
				echo $postalegg . "<br>";
				$verd += 200;
			}
		}

		
		if ($_POST['tommur'] == 10)
		{
			$verd += 1000;
		}
		else if ($_POST['tommur'] == 12) 
		{
			$verd += 1500;
		}

		else if ($_POST['tommur'] == 16) 
		{
			$verd += 2000;
		}

		echo "Verð: $verd";
		echo "<br> Verð með VSK: " . $verd * 1.25;
		 ?>

</body>
</html>