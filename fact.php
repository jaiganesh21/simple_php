<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background-color: lightsalmon;">
	<h1><u><center>FACTORIAL OF NUMBER</u></center></h1>


<form method="post">
	
	<label for="num" style="font-style: bolder; font-size: 20px; margin-left: 500px; margin-top: -300px; ">
		ENTER THE NUMBER :
	</label>
	<input type="text" name="num" id="num"  placeholder="Enter Your number" required  style=" font-size: 14px; margin-left: 3px; margin-top: 140px;"><br>

	<input type="submit" name="sub1" style=" margin-left: 650px; margin-top: 80px; font-size: 15px; background-color: green;" >

</form>

<?php  

if($_POST)
{
	$n = $_POST['num'];

	$factorial = 1;  

for($x=$n; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "<br> <center><h3>Factorial of $n is $factorial </h3>";
}

?>


</body>
</html>
