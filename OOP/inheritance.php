<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <h1>Inheritance</h1>
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
        
            class Animal{
                public $name;
                public $age = 5;
                // private $age = 5;
                //protected $age = 5;
                public function sayHi(){
                    echo "Hi -age:".$this->age."<br>";
                }

                public function __construct($name){
                    echo "Animal created<br>";
                    $this->name = $name;
                }
            }

            class Cat extends Animal{
                public function getAge(){
                    return $this -> age;
                }
                public function __construct($name){
                    echo "Cat created<br>";
                    parent::__construct($name);
                    parent::sayHi();
                }
            }

            $cat = new Cat("Leo");
            $cat -> sayHi();
            echo "Object -> age:".$cat->getAge();
            echo '<br>';
            echo $cat->name;
            echo '<br>';
            echo $cat->age;

        ?>
      </td>
    </td>
</tr></table>

</body>
</html>