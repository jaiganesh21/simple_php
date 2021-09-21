<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body style="background-color: dimgrey;">
    <h1><u><center>PALINDROME & NOT PALINDROME</u></center></h1>


<form method="post">
    
    <label for="num" style="font-style: bolder; font-size: 20px; margin-left: 500px; margin-top: -300px; ">
        ENTER THE NUMBER :
    </label>
    <input type="text" name="num" id="num"  placeholder="Enter Your number 1" required  style=" font-size: 14px; margin-left: 3px; margin-top: 140px;"><br><br><br>

    <input type="submit" name="sub1" style=" margin-left: 650px; margin-top: 80px; font-size: 15px; background-color: green;" >

</form>

<?php  

if($_POST)  
    {  
      $num = $_POST['num'];  
        $reverse = strrev($num);  
        if($num == $reverse){  
           echo "<br> <center><h3>The number $num is Palindrome</h3>";     
        }else{  
             echo "<br> <center><h3>The number $num is not a Palindrome</h3>";   
        }  
}     
?>


</body>
</html>
