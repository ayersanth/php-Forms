<html>
	<head>
		<title>test</title>
	</head>

	<body>

		<?php 
			$w=$_POST["intensify"];
			$b=strtoupper($w);
			function check_pal($string){
				if ($string == strrev($string)){
					return "This is a Palindrome!";
				} else {
					return "This is NOT a Palindrome";
				}
			}
			$a=check_pal("$w");
			echo "$b" . "!!!" . "<br>" . "$a";
		?>

	</body>


</html>