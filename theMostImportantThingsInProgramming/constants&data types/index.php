<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constants&data types</title>
</head>
<body>   

<style>
*{text-align: center;font-family: sans-serif;font-size: 36px;}
</style>
 
<?php

    $var = 'Hello';
    $var = "Hi";    
    define('CONSTANT', 'World');
    //CONSTANT = 'Earth'; Expression is not wirtable 
    echo "$var ".CONSTANT;
    
    $text= "ABCD";
    $num = 120;
    $float = 12.34;
    $bool = true;

    echo '<br>';
    echo "$text, $num, $float, ";
    echo '<br>';
    var_dump($bool);
    echo '<br>';
    $textNum = "30";
    echo $textNum.$num ;
    var_dump(is_int($num));
    var_dump(is_numeric($textNum));

    $a = 'text';
    echo '<br>'.$$a;

?>    


</body>
</html>

