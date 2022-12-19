<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$file = file("text.txt");
preg_match("/([0-9]{1,3}[\.]){3}[0-9]{1,3}/",$file[0],$ff);
print_r( $ff[0]);
?>
</body>
</html>