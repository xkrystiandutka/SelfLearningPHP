<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>
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

<div class="cookie-container">
      <p>
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
      </p>

      <button class="cookie-btn">
        Okay
      </button>
    </div>
    <script src="main.js"></script>
</body>
</html>