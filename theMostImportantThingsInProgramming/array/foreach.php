<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Foreach</title>
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
    
    $array = array('Krystian', 'Kamil', 'Jakub', 'Dominik', 'Kamila', 'Natalia', 'Krzysiek');

    echo 'FOR:<br><br>';
    for ($i = 0 ; $i < count($array)  ; $i++) {
        echo $array[$i];
        echo '<br>';
    }

    echo '<br>FOREACH:<br><br>';
    foreach ($array as $key => $value) {
        echo "$key - $value";
        echo '<br>';
    }


    ?>

</body>
</html>