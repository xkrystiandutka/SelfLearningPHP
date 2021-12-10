<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors & Destructors</title>
</head>
<body>
    <h1>Constructors & Destructors</h1>
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

use Person as GlobalPerson;

?>
<table>
    <tr>
      <td>
        <?php
        
            class Person{
                public $_name;
                public $_age;

                public function __construct($name = "Anonymous", $age = 0){
                    $this->name = $name;
                    $this->age = $age;
                }
                

                public function info(){
                    echo $this -> name. ", age: " . $this->age . "<br>";
                }

                public function __destruct()
                {
                    echo "Deleted " . $this->name . "<br>";
                }

            }

            $p1 = new Person("Krystian", 21);
            $p1 -> info();

            $p2 = new Person("Dominik");
            $p2 -> info();

            $p3 = new Person();
            $p3 -> info();

            unset($p2);
            unset($p3);
            unset($p1);
        ?>
      </td>
    </td>
</tr></table>

</body>
</html>