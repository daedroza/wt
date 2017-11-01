<?php 
	if (isset($_POST['submit'])) {
		$no=$_POST['no'];
		for($i=1;$i<=10;$i++){
			$val=$i*$no;
			echo $i."X"."$no=".$val."<br>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EXP20</title>
</head>
<body>
<!--div>
20.Write a PHP script to display the multiplication table of the given no. Take input from
user for no. using HTML form
</div-->
<form action="" method="post">
	<input type="text" name="no">
	<input type="submit" name="submit" placeholder="Submit">
</form>
</body>
</html>