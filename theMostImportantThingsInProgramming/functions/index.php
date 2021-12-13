<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parameters & Returns</title>
</head>
<body>
    <h1>Parameters & Returns</h1>
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

<?php 

        function hello(){
            echo 'Hello World !<br>';
        }

        hello();

        function add($a, $b = 1){
            echo $a + $b . '<br>';
        }

        add(5);
        add(5, 5);

        function mul($a, $b){
            $res = $a * $b;
            if($b <= 3)
            return $res;
            else
            return array($res);
        }

        $score = mul(5,3);
        echo $score. '<br>';
        var_dump(mul(5,4));       

?>

</body>
</html>

