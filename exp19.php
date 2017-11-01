<?php 
	if(isset($_POST['submit'])){
		$no1=$_POST['no1'];
		$no2=$_POST['no2'];
		for($i=$no1;$i<=$no2;$i++){
			if($i%5==0){
				echo $i." is Multiple of 5 <br>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EXP19</title>
</head>
<body>
<!--div>
19.Write a PHP script to generate multiples of 5 between the given two numbers. Take
input from user for the starting no. and end no. using HTML form
</div-->
<form action="" method="post">
	<input type="text" name="no1" placeholder="Enter Number"><br>
	<input type="text" name="no2" placeholder="Enter Number"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>