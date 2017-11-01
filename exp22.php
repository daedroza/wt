<?php 
if(isset($_POST['submit'])){
	$no=$_POST['no'];
	switch ($no) {
		case 1:
				echo "Sunday";
		break;
		case 2:
				echo "Monday";
		break;
		case 3:
				echo "Tuesday";
		break;
		case 4:
				echo "Wednesday";
		break;		
		case 5:
				echo "Thrusday";
		break;
		case 6:
				echo "Friday";
		break;
		case 7:
				echo "Saturday";
		break;
			
		default:
		echo "Number out of range";
		break;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EXP22</title>
</head>
<body>
<!--div>
22.Write a PHP script to display the weekday for the given day number. Take input from
user for day no. using HTML form. .(Input : 1, Output : Sunday
</div-->

<form action="" method="post">
	<input type="text" name="no">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>