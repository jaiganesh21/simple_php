<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background-color: rebeccapurple;">
	<h1><u><center>AREA OF THE RECTANGLE</u></center></h1>


<form method="post">
	
	<label for="len" style="font-style: bolder; font-size: 20px; margin-left: 500px; margin-top: -300px; ">
		ENTER THE LENGTH:
	</label>
	<input type="text" name="len" id="len"  placeholder="Enter Your number 1" required  style=" font-size: 14px; margin-left: 3px; margin-top: 140px;"><br><br><br>

	<label for="wid" style="font-style: bolder; font-size: 20px; margin-left: 500px;">
		ENTER THE WIDTH:
	</label>
	<input type="text" name="wid" id="wid"  placeholder="Enter Your number 2" required  style=" font-size: 14px;"><br>

	<input type="submit" name="sub1" style=" margin-left: 650px; margin-top: 80px; font-size: 15px; background-color: green;" >

</form>

<?php  

if($_POST)
{
	$length = $_POST['len'];
	$width = $_POST['wid'];

	$area = $width*$length;   

echo "<br> <center><h3> The area of a rectangle with $width x $length is $area </h3>";
}

?>


</body>
</html>
