<html>
	<head>
		<title>test</title>
	</head>

	<body>

		<?php 
			$r=$_GET["radius"];
			$d=2*$r;
			$area=3.14*$r*$r;
			$circum=2*3.14*$r;
			echo "Given radius = $r\n" . "<br>" . "Diameter of Circle = $d\n" . "<br>" . "Area of Circle = $area\n" . "<br>" . "Circumference of Circle = $circum\n";
		?>

	</body>


</html>