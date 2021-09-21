<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		ARMSTRONG OR NOT
	</title>
</head>
<body style="background-color: peachpuff;"> 

<h1><u><center>ARMSTRONG OR NOT</u></center></h1>

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
	
$num= $_POST['num'];  

$total=0;  

$x=$num;  

while($x!=0)  
{  

$rem=$x%10; 

$total=$total+$rem*$rem*$rem;

$x=$x/10;  

}  

if($num==$total)  

{  

echo " <center> <h3> $num is an Armstrong number </h3> </center>";  

}

else  

{  

echo " <center> <h3> $num is not an armstrong number </h3> </center>";  

}  
  
}

?>


</body>
</html>