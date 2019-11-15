<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">

<title>NPRU SYSTEM</title>
</head>
<body>

	<!----------------Controller-------------------->
	<?php 
	include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->invoke();

	?>
	<!----------------Controller-------------------->

</body>
</html>