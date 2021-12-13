<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Average</title>
</head>
<body>
    <h1>Arithmetic average calculator</h1>
<style>
        * {
            font-family: sans-serif;
            text-align: center;
            font-size: 35px;
            background-color: black;
            color: whitesmoke;
        }
        
        table,
        th,
        td {
            border: 1px solid black;
            background-color: grey;
            border-collapse: collapse;
        }
</style>
<form action="index.php" method="get">
        <input type="text" name="num" id="">
        <input type="submit" value="Send">
    </form>

<?php
    if(isset($_GET['num']) & !empty($_GET['num'])) {
        $a = $_GET['num'];
        $aray = explode(",", $a);
        $sum = 0;
        $i = 0;
        if(is_array(($aray))){
            foreach($aray as $item){
                if(is_numeric($item) & $item >=1 & $item <=6){
                    $sum += $item;
                    $i++;
                }
            }
        }
        if($i > 0){
            echo '<br>Your school grade point average is:' . round($sum/$i,2);
        }else echo '<br>No evaluation given!';
    } else echo '<br>No evaluation given!';

?>

    
</body>
</html>