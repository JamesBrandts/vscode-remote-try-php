

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="name" placeholder="Enter your name">
			<input type="submit" value="Submit">
		</form>
		<?php
		$name = htmlspecialchars($_POST['name']);
		if(!empty($name))
			echo "Nome não foi preenchido!";
		else
			echo $name;
		?>
	</body>
</html>