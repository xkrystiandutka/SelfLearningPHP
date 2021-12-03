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
        
     
     <?php 
     
        $a = 10;
        $b = 7;
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
        echo "<br>Square rooting = " . sqrt($a);
        
     ?>
    
</body>
</html>