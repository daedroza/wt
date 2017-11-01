<?php 
if(isset($_POST['submit'])){
	$no=$_POST['no'];
	switch ($no) {
		case 1:
				echo "January";
		break;
		case 2:
				echo "February";
		break;
		case 3:
				echo "March";
		break;
		case 4:
				echo "April";
		break;		
		case 5:
				echo "May";
		break;
		case 6:
				echo "June";
		break;
		case 7:
				echo "July";
		break;
		case 8:
				echo "August";
		break;
		case 9:
				echo "September";
		break;
		case 10:
				echo "October";
		break;
		case 11:
				echo "November";
		break;
		case 12:
				echo "December";
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
	<title>EXP21</title>
</head>
<body>
<!--div>
21.Write a PHP script to display the month name for the given month number. Take input
from user for month no. using HTML form.(Input : 7, Output : July).
</div-->
<form action="" method="post">
	<input type="text" name="no">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>