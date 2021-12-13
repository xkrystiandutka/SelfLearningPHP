<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
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
    <h3>Array</h3>

<?php

        $array = array('Krystian', 'Dominik', 'Ania');
        echo $array[0].'<br>';
        echo $array[1].'<br>';
        echo $array[2].'<br>';
        $array[2]='Kamil';
        echo $array[2].'<br><br>';

        $array2[0] = 5;
        $array2[1] = 10;
        $array2[2] = 20;
        echo $array2[0].'<br>';
        echo $array2[1].'<br>';
        $array2[2] = 'text';
        echo $array2[2].'<br><br>';

        $array3 = array('red' => 'czerwony', 'black' => 'czarny', 'white'=> 'biały');
        echo $array3['red'].'<br>';
        echo $array3['white'].'<br>';
        $array3['black'] = 'black';
        echo $array3['black'].'<br><br>'; 

        $array4['language']['programming'][0] = 'php';
        echo $array4['language']['programming'][0].'<br><br>';

        var_dump($array);
        echo '<br>';
        print_r($array);

?>    


</body>

</html>