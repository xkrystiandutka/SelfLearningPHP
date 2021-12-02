<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables&forms</title>
</head>
<body>   

<style> *{
    text-align: center;
    font-family: sans-serif;
}
</style>
 
<?php

    if(isset($_GET['name'])) {
        $name = $_GET['name'];
    } else {
    $name = 'anonymous';
    }

    echo '<h2>hello '.$name. '</h2>';
    
?>    

    <form action="index.php" method="get">
        <input type="text" name="name" id="">
        <input type="submit" value="Send">
    </form>

</body>
</html>

