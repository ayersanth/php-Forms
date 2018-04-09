<html>
	<head>
		<title>test</title>
	</head>

	<body>
		
		<p>This is what you have submitted:</p>
		<dl>
			<dt>Username:</dt><dd><?php echo $_POST["name"] ?></dd>
			<br>
			<dt>Places:</dt>
			<?php 
				if (!empty($_POST["place"])) {
					foreach ($_POST["place"] as $check) {
						echo $check , "<br>";
					}
				} else {
					echo "please enter place\n";
				}
			?>
			<br>
			<br>
			<dt>Result:</dt><dd><?php echo $_POST["result"] ?></dd>
			<br>
			<br>
		</dl>

	</body>


</html>