<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background-color: #4682B4;">
    <h1><u><center>AREA OF THE TRIANGLE</u></center></h1>


<form method="post">
    
    <label for="heg" style="font-style: bolder; font-size: 20px; margin-left: 500px; margin-top: -300px; ">
        ENTER THE HEIGHT:
    </label>
    <input type="text" name="heg" id="heg"  placeholder="Enter Your number 1" required  style=" font-size: 14px; margin-left: 3px; margin-top: 140px;"><br><br><br>

    <label for="bas" style="font-style: bolder; font-size: 20px; margin-left: 500px;">
        ENTER THE BASE:
    </label>
    <input type="text" name="bas" id="bas"  placeholder="Enter Your number 2" required  style=" font-size: 14px;"><br>

    <input type="submit" name="sub1" style=" margin-left: 650px; margin-top: 80px; font-size: 15px; background-color: green;" >

</form>

<?php  

if($_POST)
{
    $height = $_POST['heg'];
    $base = $_POST['bas'];

    $area = ($base*$height)/2;

echo "<br> <center><h3> The area of a triangle base is $base and height $height <br> area =  $area </h3>";
}

?>


</body>
</html>









