<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Dowhile For</title>
</head>
<body>
<style> *{font-family: sans-serif; text-align: center; font-size: 35px; background-color: black;color: whitesmoke;} 
table, th, td {
  border: 1px solid black;
  background-color:grey; 
  border-collapse: collapse;
}
</style>
        <h2>Loop</h2>
    <form acction="index.php" method="get">
    <br> <input type="number" name="num" id="">
         <input type="submit" value="OK">

    </form> 

    <?php 
        if(isset($_GET['num']) && is_numeric($_GET['num'])){
            
            $a = $_GET['num'];
            echo "<br>a = $a <br><br>";

            echo'<table style="width: 100%;" align="center">
            <tr>
            <th>WHILE</th>
            <th>DOWHILE</th>
            <th>FOR</th>
            </tr>';
            
            echo '<tr><td>';
            
            $i = $a;
            while($i > 0 ){
                echo "$i<br>";
                if($i == 5)
                {
                    break;
                }
                $i--;
            }
            

            echo '</td><td>';
    
            $i = $a;
            do {
                if($i % 2 == 1) {
                    goto lab1;
                }
                echo "$i - even<br>";
                $i--;
                continue;
                lab1:
                echo "$i - odd<br>";
                $i--;
            } while($i > 0);

            echo '</td><td>';
    
            for(; $a > 0; $a--){
                if($a % 2 == 1){
                continue;
                }
                echo "$a<br>";
            }

            echo '</td></tr></table>';
        

        }else echo '<br>Nothing is specified!';
    ?>
</body>
</html>