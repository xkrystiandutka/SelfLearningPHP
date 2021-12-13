<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include & Require</title>
</head>
<body>
    <h1>Include & Require</h1>
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

    include 'hello.php';

    /*include_once 'hello.php';
    include_once 'hello.php'; */

    /*include'helo.php';
    require('helo.php'); testing differences between include and require with source error */

    require('hello.php'); 

    /*require_once('hello.php'); 
    require_once('hello.php'); 
    require_once('hello.php'); require_once only one times include files*/
    
    echo '<br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend mauris sem, vitae fringilla leo euismod vel. Nunc cursus libero eu rutrum sodales...'

?>

</body>
</html>