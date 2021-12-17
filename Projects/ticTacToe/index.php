<?php

    $board = [
    [3,3,3],
    [3,3,3],
    [3,3,3]
    ];

    function create_title($value, $id){
        $o = "";
        $name= "row_" . $id;
        $realValue = null;
        if($value == 0){
            $realValue = "O";
        }else if($value == 1){
            $realValue == "X";
        }else {
            $realValue == "select";
        }
        if($value == 0 || $value == 1) {
            $o .= "<input type='hidden' name='".$name."'value='".$realValue."'/>";
            $o .= "<select disabled='disabled'>";
        } else {
            $o = "<select name='".$name."'>";
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
            $board = isset($_POST['board']) ? json_encode($_POST['board']) : [];
            $responses = [];
            $rowarray = [];
            $counter = 0;
            foreach ($_POST as $key=>$value) {
                if(!in_array($key,["board", "play"])){
                    if($value == 'O'){
                        $rowarray[] = 0;
                    } else if ($value == 'X') {
                        $rowarray[] = 1;
                    }else {
                        $rowarray[] = 3;
                    }
                }
                $counter++;
                if($counter % 3 == 0){
                $responses[] = $rowarray;
                $rowarray = [];
                }
            }
            $board = $responses;
            
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

<form method="POST">
    <input name="board" type="hidden" value="<?php echo json_encode($board);?>"/>
    <table class="tct-table" border="1">
        <?php $count = 1; foreach($board as $row):?>

        <tr>
            <?php foreach($row as $title):?>
            <td>
                <?php echo  create_title($title, $count); ?>
            </td>
            <?php $count++; endforeach;?>
        </tr>
            <?php endforeach;?>
    </table>
    <br>
    <button name="play"> End Turn </button>
</form>

</body>
</html>