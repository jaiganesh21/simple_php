<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background-color: lightseagreen;">
	<h1><u><center>ODD OR EVEN</u></center></h1>

<form method="post">
	
	<label for="num" style="font-style: bolder; font-size: 20px; margin-left: 500px; margin-top: -300px; ">
		ENTER THE NUMBER :
	</label>
	<input type="text" name="num" id="num"  placeholder="Enter Your number" required  style=" font-size: 14px; margin-left: 3px; margin-top: 130px;"><br>

	<input type="submit" name="sub1" style=" margin-left: 650px; margin-top: 70px; font-size: 15px; background-color: green;" >

</form>

<?php  

if($_POST)
{
	$n = $_POST['num'];
	if($n % 2 == 0){
		echo "<br> <center><h3> $n is even </h3>";
	}
	else{
		echo "<br> <center> $n is odd";
	}
}

?>



</body>
</html>
