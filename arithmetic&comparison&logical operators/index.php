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
    <input type="number" name="number1" placeholder="Number 1" required="number"/><br><br>  
    Enter Second Number (b) : 
    <input type="number" name="number2" placeholder="Number 2" required="number"/><br><br>  
    <input  type="submit" name="submit" value="Add">  
</form>  
<?php  
       $number1=1;
       $number2=1;

    if(isset($_POST['submit']))  {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];  
    }  
?>  
     
     <?php
        
        $a = $number1;
        $b = $number2;
        echo "a = $a b = $b<br>";
        echo "<br>Addition = " . ($a + $b);
        echo "<br>Subtraction = " . ($a - $b);
        echo "<br>Multiplication = " . ($a * $b);
        echo "<br>Division = " . round( $a / $b, 2);
        echo "<br>Modulus = " . ($a % $b);
        
        /*$a = $a + 10;
        $a += 10;
        $a++;
        echo "<br>a=" . $a++;
        echo "<br>a=" . $a;
        echo "<br>a=" . ++$a; */
        
        echo "<br>Exponentiation = " . POW($a,$b);
        echo "<br>Square rooting = " . round(sqrt($a),2);
        
     ?>

    <h2> Comparison operators </h2>
    <?php 

        echo "a = $a, b = $b<br>";
        echo "<br>$a == $b : ";
        var_dump($a == $b);
        echo "<br>$a != $b :";
        var_dump($a != $b);
        echo "<br>$a != $b : ";
        var_dump($a <> $b);
        echo "<br>$a < $b : ";
        var_dump($a < $b);
        echo "<br>$a <= $b : ";
        var_dump($a <= $b);
        echo "<br>$a > $b :";
        var_dump($a > $b);
        echo "<br>$a >= $b : ";
        var_dump($a >= $b);

        echo "<br>$a === $b : ";
        var_dump($a === $b);
        echo "<br>$a !== $b : ";
        var_dump($a !== $b);
    
    ?>

    <h2> Logical operators </h2>

    <?php 
    
    $x = true;
    $y = false;
    
    echo "x = ";
    var_dump($x);
    echo "y = ";
    var_dump($y);

    echo '<br><br> OR :';
    var_dump($x or $y);
    echo '<br><br> AND :';
    var_dump($x and $y);
    echo '<br><br>OR || :';
    var_dump($x || $y);
    echo '<br><br>AND && :';
    var_dump($x && $y);
    echo '<br><br> XOR :';
    var_dump($x xor $y);
    echo '<br><br> NOT :';
    var_dump(!$x);

    echo '<br><br>Score = ';
    var_dump((true || false) && !false);

    ?>



</body>
</html>