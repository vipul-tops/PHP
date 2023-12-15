<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FILES</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<fieldset style="width : 200px ;">
			<legend>$_FILES</legend>
			<label>File Upload</label><br><br>
			<input type="file" name="files"><br><br>
			<input type="submit" name="submit">
			<hr>
			<?php
				echo '<pre>';
				print_r($_FILES);
			?>
		</fieldset>
	</form>


</body>
</html>