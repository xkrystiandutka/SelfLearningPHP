<!DOCTYPE html>
<?php
  
setcookie('cookie_name', '', time() - 3600);
?>
  
<html>
  
<body>
  
    <?php
    echo "Cookie 'cookie_name' is deleted.";
    ?>
    <br>
    <h1><a href="index.php"> Back to main page </a></h1>
    
</body>
  
</html>