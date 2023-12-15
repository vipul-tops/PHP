<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switch Case</title>
</head>
<body>
	<h1>Switch Case</h1>
	<fieldset>
		<legend>Enter Your Marks</legend>
		<form method="post">
			<input type="number" name="marks"><br><br>
			<input type="submit" name="submit" value="SUBMIT">
			<hr>
			
			<?php
	
				$marks = $_POST['marks'];

				switch ($marks) {
					case ($marks >= 70):
						echo '<b style = "color :blue;">You Are Passed With Distiction Class</b>';
						break;
					case ($marks >= 60):
						echo '<b style = "color :blue;">You Are Passed With First Class</b>';
						break;
					case ($marks >= 50 ):
						echo '<b style = "color :blue;">You Are Passed With Second Class</b>';
						break;
					case ($marks >= 35):
						echo '<b style = "color :blue;">You Are Passed</b>';
						break;
					default:
						echo '<b style = "color :red;">You Are Failed !!</b>';
						break;
				}
			?>
		</form>
	</fieldset>

</body>
</html>

