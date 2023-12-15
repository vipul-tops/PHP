<?php

	echo "<h2>Cookie</h2>";
	setcookie("my_car","ciaz",time()+2*24*60*60);

	setcookie("my_car","",time()-60);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie</title>
</head>
<body>
	<fieldset style=" width: 300px;">
		<legend>Cookies</legend>
		<?php
			echo "<h3> Fav Car is : ".$_COOKIE['my_car']."</h3>";

		?>
	</fieldset>
</body>
</html>