<!DOCTYPE html>
<html>
<head>
	<meta charset = utf-8>
</head>
<body>
	<?php
	    if (isset($_GET['name']))
		echo "Hello " . $_GET['name'];
	    else
		echo "Hello platypus";
	?>
</body>
</html>
