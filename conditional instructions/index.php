<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional instructions</title>
</head>
<body>
<style> *{font-family: sans-serif; text-align: center; font-size: 35px; background-color: black;color: whitesmoke;} </style>
        <h2> Conditional instructions</h2>
    <form acction="index.php" method="get">
        <input type="number" name="num" id="">
        <input type="submit" value="OK">

    </form> 

    <?php 
        if(isset($_GET['num']) && is_numeric($_GET['num'])){
            $a = $_GET['num'];
            echo "<br> Number = $a";
            if ($a % 2 == 0){
                echo "<br> Number is even";
            }else echo "<br> Number is odd";
            if ($a > 0)
            echo "<br> Number is greater than zero";
            else if ($a == 0) echo "<br> Number is equal zero";
            else echo "<br>  Number is less than zero";

            echo $a % 3 == 0 ? '<br>Number is divisible by 3.' :  '<br>Number is not divisible by 3.';

        }else {
            echo '<br>Nothing is specified!';
        }
    ?>


</body>
</html>