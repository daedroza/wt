<?php 
	if(isset($_POST['submit'])){
		$no=$_POST['no'];
		if($no%2==0){
			echo "Number is Even";
		}else{
			echo "Number is Odd";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!--div>18.Write a PHP script to find if the given no. is even or odd. Take input from user for no.
using HTML form.
</div-->
<form action="" method="post">
	<input type="text" name="no" placeholder="Enter Number">
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>