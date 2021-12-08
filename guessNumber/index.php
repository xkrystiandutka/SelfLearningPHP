<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess Number</title>
</head>
<body>
    <h1>Guess Number</h1>
<style>
        * {
            font-family: sans-serif;
            text-align: center;
            font-size: 35px;
        }
        
        table{
            display: inline-block;

        }

        th,td {
            border: 1px solid #999;
            border-collapse: collapse;
            padding: 5px;
        }
</style>

<table>
    <tr>
    <td>
        <p>Game guess number 1 - 10</p>
        <form action="index.php" method="post">
            <p>Number: <input type="number" name="num" id="num"></p>
            <input type="submit" value="Check">
        </form>
    </td>
</tr></table>
<br><br>

<table>
    <tr>
        <td>
            <?php

                if(isset($_POST['num']) & is_numeric($_POST['num'])) {
                    $num = $_POST['num'];

                    if(isset($_SESSION['try'])) {
                        $_SESSION['try']++;
                    } else {
                        $_SESSION['try'] = 1;
                    }
                    if(!isset($_SESSION['fate'])) {
                        $_SESSION['fate'] = random_int(1,10);
                    }

                    if ($num > 10) {
                        echo 'You gave a number out of range!<br>';
                    }else{
                    if ($num > $_SESSION['fate']) {
                        echo 'The number drawn is less than your!<br>';
                    }else{
                    if ($num < $_SESSION['fate']) {
                        echo 'The number drawn is greater than your!<br>';
                    }
                   else {
                        echo 'Congratulations, you have guessed the number!<br>You guessed in '. $_SESSION['try']  .' tries';
                        session_destroy();
                    }}}
                }else {
                    if(isset($_SESSION['try'])) {
                        echo 'Give the next number';
                    } else { 
                        echo 'Give the first number...';
                    }   
                }
            ?>
        </td>
    </tr>
</table>

</body>
</html>