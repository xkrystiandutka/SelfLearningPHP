<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>
    <h1>GET & POST</h1>
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

<table><tr>
    <td>
        <p>GET</p>
        <form action="index.php" method="get">
            <p>Login: <input type="text" name="login" id=""></p>
            <p>Password: <input type="password" name="pass" id=""></p>
            <input type="submit" value="Send">
        </form>
    </td>
    
    <td>
        <p>POST</p>
        <form action="index.php" method="post">
            <p>Login: <input type="text" name="login" id=""></p>
            <p>Password: <input type="password" name="pass" id=""></p>
            <input type="submit" value="Send">
        </form>
    </td>
</tr></table>
<br><br>
<table>
    <tr>
        <td>
            <?php 
                   if(isset($_GET['login']) & isset($_GET['pass'])) {
                       echo '<b>GET</b><br><br>';
                       echo 'LOGIN:';
                       echo $_GET['login'];
                       echo '<br>PASSWORD:';
                       echo $_GET['pass'];
                    } else if (isset($_POST['login']) & isset($_POST['pass'])) {
                        echo '<b>POST</b><br><br>';
                        echo 'LOGIN:';
                        echo $_POST['login'];
                        echo '<br>PASSWORD:';
                        echo $_POST['pass'];
                     } else echo "Form not sent!";
            
            ?>
        </td>
    </tr>
</table>

</body>
</html>