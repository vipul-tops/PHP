
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>table</title>
</head>
<body>
	<h2>TABLE </h2>
	<fieldset style="width:300px;">
		<form method="post">
			<legend>Enter Number</legend>
			<input type="number" name="number"><br><br>
			<input type="submit" name="submit"><br>
		</form>
		<hr>
		<?php

		if (isset($_POST['submit'])){
			$a = $_POST['number'];
			for ($i = 1;$i <=10; $i++){
				echo "$a X $i = ".$a*$i."<br>";
			}
		}


		?>
	</fieldset>

</body>
</html>