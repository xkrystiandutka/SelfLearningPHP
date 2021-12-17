<?php

    $board = [
    [0,1,0],
    [1,1,0],
    [3,1,0]
    ];

    function create_title($value){
        $o = "";
        if($value == 0 || $value == 1) {
            $o .="<select disabled='disabled'>";
        } else {
            $o = "<select>";
        }
            $o .= "<option>select</option>";
            if ($value == 0){
                $o .= "<option selected='selected'>O</option>";
            } else {
                $o .= "<option>O</option>";
            }
            if ($value == 1){
                $o .= "<option selected='selected'>X</option>";
            } else {
                $o .= "<option>X</option>";
            }
            $o .= "</select>";
            return $o;
        }


        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['play'])){

        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
</head>
<body>
    <style>
        .tct-table {
            border-collapse: separate;
        }
    </style>


<h1>Tic Tac Toe Games</h1>

<form>

    <table class="tct-table" border="1">
        <?php foreach($board as $row):?>

        <tr>
            <?php foreach($row as $title):?>
            <td>
                <?php echo  create_title($title); ?>
            </td>
            <?php endforeach;?>
        </tr>
            <?php endforeach;?>
    </table>
    <br>

    <button name="play"> End Turn </button>
</form>

</body>
</html>