<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection instances</title>
</head>
<body>
<style> *{font-family: sans-serif; text-align: center; font-size: 35px; background-color: black;color: whitesmoke;} </style>
        <h2>Selection instances</h2>
        Specify the day of the week from 1 to 7 <br>
    <form acction="switch.php" method="get">
    <br> <input type="number" name="num" id="" placeholder="1-7">
         <input type="submit" value="OK">

    </form> 

    <?php 
        if(isset($_GET['num']) && is_numeric($_GET['num'])){
            $day = $_GET['num'];
            echo "<br> Day number = $day, ";
            
            switch($day){
                case 1: echo "Monday"; 
                break;
                case 2: echo "Tuesday";
                break; 
                case 3: echo "Wednesday";
                break; 
                case 4: echo "Thursday";
                break; 
                case 5: echo "Friday";
                break; 
                case 6: case 7: echo "Weekend";
                break;
                default: echo "There is no such day of the week";
            }
        }else {
            echo '<br>Nothing is specified!';
        }
    ?>


</body>
</html>