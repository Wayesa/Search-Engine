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
	$terms = explode(" ", $search);
	$query = "SELECT * FROM users WHERE  ";

	$i=0;
	Foreach($terms as $each) {
		$i++;
		if ($i==1) {
			$query .="name LIKE '%$each' ";
		} else{
			$query .="OR name LIKE '%$each'";
		}
	}

	mysql_connect("localhost", "root", "");
	mysql_select_db("testsite");
	$query = mysql_query($query);
	$num = mysql_num_rows($query);

	if ($num > 0 && $search!="") {
		while ($row = mysql_fetch_assoc($query)) {
			$id = $row['id'];
			$name = $row['name'];
			$email = $row['email'];
			$password = $password['password'];
			echo "<h3>$name</h3><br/>$email<br/>";
			# code...
		}
	}
	else{
		echo "NO result found";
	}
	mysql_close();
}
else{
	echo "please type any word.... ";
}
 ?>
}

</body>
</html>