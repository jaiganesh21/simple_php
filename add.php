<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background-color: crimson;">
	<h1><u><center>ADD 2 NUMBERS</u></center></h1>


<form method="post">
	
	<label for="num1" style="font-style: bolder; font-size: 20px; margin-left: 500px; margin-top: -300px; ">
		ENTER THE NUMBER 1:
	</label>
	<input type="text" name="num1" id="num1"  placeholder="Enter Your number 1" required  style=" font-size: 14px; margin-left: 3px; margin-top: 140px;"><br><br><br>

	<label for="num2" style="font-style: bolder; font-size: 20px; margin-left: 500px;">
		ENTER THE NUMBER 2:
	</label>
	<input type="text" name="num2" id="num2"  placeholder="Enter Your number 2" required  style=" font-size: 14px;"><br>

	<input type="submit" name="sub1" style=" margin-left: 650px; margin-top: 80px; font-size: 15px; background-color: green;" >

</form>

<?php  

if($_POST)
{
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];

	$sum = $n1+$n2;
	
echo "<br> <center><h3>Sum Of Number is $sum </h3>";
}

?>


</body>
</html>
