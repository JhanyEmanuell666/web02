<html>
<head>
	<title>Variable Static</title>
</head>
<body>
	<?php 
		Function test()
		{
			Static $a=0; //dengan static
			echo "Nilai a : ";
			echo $a;
			echo "<br>";
			$a++;
		}
		Test();
		Test();
		Test();
		Test();
		Test();
	?>
</body>
</html>