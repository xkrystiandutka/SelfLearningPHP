<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class & Object</title>
</head>
<body>
    <h1>Class & Object</h1>
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
<?php

?>
<table>
    <tr>
      <td>
        <?php
        
            class Person {
                public $_name;
                public $_age;

                public function info(){
                    echo $this -> name. ", age: " . $this->age . "<br>";
                }
            }

            $p1 = new Person();
            $p1 -> name = "Krystian";
            $p1 -> age = 21;
            $p1 -> info();
            /* echo $p1->name.'<br>';
             echo $p1->age.'<br>'; */
            $p2 = new Person();
            $p2 -> name = "Dominik";
            $p2 -> age = 22;

            $p3 = new Person();
            $p3 -> name = "Artur";
            $p3 -> age = 23;

            $p2 -> info();
            $p3 -> info();
        ?>
      </td>
    </td>
</tr></table>

</body>
</html>