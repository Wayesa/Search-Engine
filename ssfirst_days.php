<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<form method="GET" action="search.php">
		<input type="text" name="search">
		<input type="submit" name="submit" value="search database">
	</form>
</center>

<?php 

if (isset($_REQUEST['submit'])) {
	$search = $_REQUEST['search'];
	$terms = explode(delimiter, string)
}
else{
	echo "please type any word.... ";
}
 ?>
}

</body>
</html>