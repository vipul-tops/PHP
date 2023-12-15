<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GET_POST_REQUEST</title>
</head>
<body>
	<form method="post">
		<fieldset style="width: 260px;">
			<legend>Personal Information</legend>
			<label>Name</label>
			<input type="text" name="name" id="name"><br><br>
			<label>Email</label>
			<input type="email" name="email" id="email"><br><br>
			<label>DoB</label>
			<input type="date" name="dob" id="dob"><br><br>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

	<div style="display: flex;">
	<fieldset style="width: 260px;">
		<legend>GET DATA</legend>
		<?php
			echo '<h3> Name : '.$_GET['name'].' </h3>';
			echo '<h3> Email  : '.$_GET['email'].'</h3>';
			echo '<h3> DOB  : '.$_GET['dob'].'</h3>';

		?>
	</fieldset>

	<fieldset style="width: 260px;">
		<legend>POST DATA</legend>
		<?php
			echo '<h3> Name : '.$_POST['name'].' </h3>';
			echo '<h3> Email  : '.$_POST['email'].'</h3>';
			echo '<h3> DOB  : '.$_POST['dob'].'</h3>';

		?>
	</fieldset>
	</div>


</body>
</html>