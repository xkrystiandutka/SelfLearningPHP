<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic&Comparison&Logical operators</title>
</head>
<body>
    <style> *{font-family: sans-serif; text-align: center; font-size: 35px; background-color: black;color: whitesmoke;} </style>
        <h2> Arithmetic operators</h2>
        <form method="post">  
    Enter First Number (a) :
    <input type="number" name="number1" /><br><br>  
    Enter Second Number (b) : 
    <input type="number" name="number2" /><br><br>  
    <input  type="submit" name="submit" value="Add">  
</form>  
<?php  
        $number1 = 1;
        $number2 = 1;
    if(isset($_POST['submit']))  {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
    }  
?>  
     
     <?php 
     
        $a = $number1;
        $b = $number2;
        echo "a = $a, b = $b<br>";
        echo "<br>Addition = " . ($a + $b);
        echo "<br>Subtraction = " . ($a - $b);
        echo "<br>Multiplication = " . ($a * $b);
        echo "<br>Division = " . round( $a / $b, 2);
        echo "<br>Modulus = " . ($a % $b);
        
        //$a = $a + 10;
        //$a += 10;
        $a++;
        echo "<br>a=" . $a++;
        echo "<br>a=" . $a;
        echo "<br>a=" . ++$a;
        
        echo "<br>Exponentiation = " . POW($a,$b);
        echo "<br>Square rooting = " . round(sqrt($a),2);
        
     ?>
    
</body>
</html>