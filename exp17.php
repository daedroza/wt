<?php 
	if(isset($_POST['submit'])){
		$no1=$_POST['no1'];
		$no2=$_POST['no2'];
		 for($i=$no1;$i<=$no2;$i++){  //numbers to be checked as prime

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors


                if($i % $j==0){ 

                      $counter++;
                }
          }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){

               print $i." is Prime <br/>";
        }
    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EXP17</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="no1"><br>
	<input type="text" name="no2"><br>
	<input type="submit" name="submit">
</form>
<!--div style="display: none;"><?php echo $result; ?></div-->
</body>
</html>