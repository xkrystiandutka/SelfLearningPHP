<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class abstract & Interface</title>
</head>
<body>
    <h1>Class abstract & Interface</h1>
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

abstract class Animal1 {
                public $name = "Leo";
                abstract public function getVoice();
                public function getStandardVoice() {
                    return "Grrr!<br>";
                }
            }
            
            // class B extends Animal {
            //     public function getVoice(){
            //         return "Meow!<br>";
            //     }
            // }

            interface eatIntreface {
                public function eat($food);
            }

            interface BIntreface {
 
            }

            class Cat1 extends Animal1 implements eatIntreface, BIntreface{
                public function getVoice(){
                    return "Meow!<br>";
                }
                public function eat($food){
                    return "Omomom " . $food . '<br>';
                }
            }

            $cat = new Cat1();
            echo $cat -> name. '<br>'. $cat->getVoice();
            echo $cat->getStandardVoice();
            echo $cat->eat("milk");



        ?>
      </td>
    </td>
</tr></table>

</body>
</html>