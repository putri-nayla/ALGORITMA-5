html>
<body>
	<form method="POST" action="">
		<input type="text" name="nama"><br>
		<input type="text" name="email"><br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	if ($_POST)
	{
		echo 'Nama: putri' . $_POST['nama'];
		echo '<br>';
		echo 'Email: putrinayla2020@gmail.com' . $_POST['email'];
	}
	?>
</body>
</html>

