<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		FIBONACCI SERIES
	</title>
</head>
<body style="background-color: #BA55D3;"> 

<h1><u><center>FIBONACCI SERIES</u></center></h1>

	<form method="post">
	
	<label for="num" style="font-style: bolder; font-size: 20px; margin-left: 500px; margin-top: -300px; ">
		ENTER THE NUMBER :
	</label>
	<input type="text" name="num" id="num"  placeholder="Enter Your number" required  style=" font-size: 14px; margin-left: 3px; margin-top: 130px;"><br>

	<input type="submit" name="sub1" style=" margin-left: 650px; margin-top: 70px; font-size: 15px; background-color: green;" ><br>

</form>

<?php  

if($_POST)
{
	
function Fibonacci($n){
  
    $num1 = 0;
    $num2 = 1;
  
    $counter = 0;
    while ($counter < $n){
         //echo ' '.$num1;
        echo "<center> <h5> $num1 </h5> </center>";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}
  
$n = $_POST['num'];
Fibonacci($n);
}

?>


</body>
</html>