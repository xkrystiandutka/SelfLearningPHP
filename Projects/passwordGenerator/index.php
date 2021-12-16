<?php
include 'passwordCreator.php';

$modes = ["easy", "medium", "hard"];

    $difficulty = "hard";
    $limit = 8;
    $password = "Your password here";
    $special = false;

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['gen_pass'])){
        $difficulty = isset($_POST['mode']) ? $_POST['mode'] : "easy";
        $limit = isset($_POST['limit']) ? $_POST['limit'] : 8;
        $special = isset($_POST['special']) ? $_POST['special'] : null;
        $passwordCreator = new passwordCreator($difficulty, $limit);
        if($special) {
            $passwordCreator ->setSpecialChatacters(true);
        }
        $password = $passwordCreator->generate(); // generate password here
    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    
<h1>Password Maker</h1>
<form method="post">
    Mode: <select name="mode">
        <?php foreach($modes as $mode):?>
            <?php if($mode == $difficulty):?>
            <option value="<?php echo $mode;?>" selected="selected"><?php echo strtoupper($mode);?></option>
                <?php else:?>
            <option value="<?php echo $mode;?>"><?php echo strtoupper($mode);?></option>
                <?php endif;?> 
        <?php endforeach;?>
    </select>
    <br><br>
    Length: <input name="limit" type="number" style="width: 60px;" value="<?php echo $limit;?>"/>
    <br>
    <?php if($special):?>
        <input type="checkbox" name="special" checked="checked"/> Special Characters
    <?php else:?>
        <input type="checkbox" name="special"/> Special Characters
    <?php endif;?>

    <br><br>
    <button type="submit" name="gen_pass"> Generator Password</button>

</form>
<h3>Your Password</h3>
<p style="padding: 0 0 0 0; border: 1px solid #ccc; font-size:50px;"><?php echo $password;?></p>

</body>
</html>