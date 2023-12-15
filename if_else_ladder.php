<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>if_else_ladder</title>
</head>
<body>
	<fieldset>
		<legend>Enter Your Marks</legend>
		<form method="post">
			<input type="number" name="marks"><br><br>
			<input type="submit" name="submit" value="SUBMIT">
			<hr>
			
			<?php
	
				$marks = $_POST['marks'];

				echo $marks;

				if ($marks >= 70){
					echo '<b style = "color :blue;">You Are Passed With Distiction Class</b>';
				} 
				else if ($marks >= 60){
					echo '<b style = "color :blue;">You Are Passed With First Class</b>';
				}
				else if($marks >= 50 ){
					echo '<b style = "color :blue;">You Are Passed With Second Class</b>';
				}
				else if($marks >= 35){
					echo '<b style = "color :blue;">You Are Passed</b>';
				}
				else{
					echo '<b style = "color :red;">You Are Failed !!</b>';
				}

			?>

		</form>
	</fieldset>

</body>
</html>

