<html>
	<head>
		<title>Image</title>
		<meta http-equiv="refresh" content="15">
		<style>
			body {
				margin: 0px auto;
				padding: 0px;
				background: url(bg.png);				
			}
		</style>
	</head>
	<body>
		

<?php

include("gisearch.php");

$i = new gisearch("nature anime kawaii");
echo '<center><img src="'. $i->get_link() .'" style="height: 180px; max-width: 260px; border: 5px solid white;"/></center><br>';
?>
	</body>
</html>