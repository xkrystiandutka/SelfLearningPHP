<?php 
    session_start();

if (isset($_POST['login']) & isset($_POST['pass'])) {
    $_SESSION['user'] = $_POST['login'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Session</h1>
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
<?php if(!isset($_SESSION['user']))
{
?>
<table><tr>  
    <td>
        <p>Log in</p>
        <form action="index.php" method="post">
            <p>Login: <input type="text" name="login" id=""></p>
            <p>Password: <input type="password" name="pass" id=""></p>
            <input type="submit" value="Log in">
        </form>
    </td>
</tr></table>
<?php 
}
?>
<br><br>
<table>
    <tr>
        <td>
            <?php 
                    if(isset($_SESSION['user'])) {
                        echo '<b>Logged in</b><br><br>';
                        echo 'LOGIN:';
                        echo $_SESSION['user'];
                        echo '<br><br><button class="a"><a href="logout.php">Logout</a></button>';
                    } else echo "No logged user!";
            
            ?>
        </td>
    </tr>
</table>

</body>
</html>