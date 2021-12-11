<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static</title>
</head>
<body>
    <h1>Static</h1>
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
<table>
    <tr>
      <td>
        <?php
        
            class Person1{
                public $name;
                public $age;
                public static $count = 0;

                public function __construct($name, $age){
                    $this -> name = $name;
                    $this -> age = $age;
                    self::$count++;
                }

                public function info(){
                    echo $this->name . ' age: ' . $this-> age . ' number: '. self::$count .  "<br>";
                }

                public static function infoAboutCount(){
                    echo "(by infoAboutCount) Number of people: " . self::$count . '<br>';
                }

            }
            Person1::infoAboutCount();
            echo "Number of people: " . Person1::$count . "<br><br>";
            $p1 = new Person1("Krystian", 21);
            $p1->info();
            $p1->infoAboutCount();
            echo "Number of people: " . Person1::$count . "<br><br>";
            
            $p2 = new Person1("Dominik", 22);
            $p2->info();
            $p2->infoAboutCount();
            echo "Number of people: " . Person1::$count . "<br><br>";

            $p3 = new Person1("Artur", 23); 
            $p3->info();
            $p3->infoAboutCount();
            echo "Number of people: " . Person1::$count . "<br><br>";

            $p4 = new Person1("Kamil", 18);
            $p4->info();
            $p4->infoAboutCount();
            echo "Number of people: " . Person1::$count . "<br>";
            Person1::infoAboutCount();
        ?>
      </td>
    </td>
</tr></table>

</body>
</html>