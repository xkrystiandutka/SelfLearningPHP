<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>
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

        a:link {
        text-decoration: none;
        color: black;
        }

        a:visited {
        text-decoration: none;
        color: black;
        }

        a:hover {
        text-decoration: none;
        color: black;
        }

        a:active {
        text-decoration: none;
        color: black;
        }
</style>
<table><tr>  
    <td>
        <p>Input value</p>
        <form action="index.php" method="post">
            <p>Name: <input type="text" name="cookie_name" id=""></p>
            <input type="submit" value="Remember">
        </form>
    </td>
</tr></table>
<br><br>
<?php 
    if(isset($_POST['cookie_name'])){
        //set cookies
        //echo time();
        //$_COOKIE['cookie_name'] = $_POST['cookie_name']; - mistake
        setcookie('cookie_name', $_POST['cookie_name'], time() + 3600 * 24 * 10);
    }
?>
<table>
    <tr>
        <td>
            <?php 
                    if(isset($_COOKIE['cookie_name'])) {
                        //get cookies
                        echo '<b>Imie:</b>';
                        echo $_COOKIE['cookie_name'];
                        echo '<br><br><a href="delete.php">Delete</a';
                    } else echo "No cookies!";
            ?>
        </td>
    </tr>
</table>

</body>
</html>