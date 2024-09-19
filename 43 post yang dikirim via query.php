<html>
<body>
	<form method="POST" action="?action=edit">
		<input type="text" name="nama:putri"><br>
		<input type="text" name="email: putrinayla2020@gmail.com"><br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	if ($_POST)
	{
		echo '<pre>'; 
		print_r($_GET);
		print_r($_POST);
	}
	?>
</body>
</html>
