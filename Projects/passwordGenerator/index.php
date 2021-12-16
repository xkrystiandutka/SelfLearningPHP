<?php

    $modes = ["easy", "medium", "hard"];
    $difficulty = "hard";
    $limit = 7;
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
            <?php if($mode = $difficulty):?>
            <?php else:?>
                <option value="<?php echo $mode;?>" selected="selected"><?php echo strtoupper($mode);?></option>
            <?php endif?>    
                <option value="<?php echo $mode;?>"><?php echo strtoupper($mode);?></option>
        <?php endforeach;?>
    </select>
    <br>
    Length: <input type="number" style="width: 60px;" value="<?php echo $limit;?>"/>
    <br><br>
    <button type="submit" name="gen_pass"> Generator Password</button>

</form>


</body>
</html>