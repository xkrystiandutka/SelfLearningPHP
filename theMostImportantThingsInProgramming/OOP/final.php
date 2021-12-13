<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Final</title>
</head>
<body>
    <h1>Final</h1>
<table>
    <tr>
      <td>
        <?php
        
        class Animal2 {
            final public function getVoice1(){
                echo "Grr<br>";
            }
        }  

        
        final class Cat1 extends Animal2 { 
            public function getVoice2(){
                echo "Meow<br>";
            }
        }

        /*class Lion extends Cat1 { Class Lion may not inherit from final class (Cat1) due to Cat1 is final class

        } */

        $animal = new Animal2();
        $animal -> getVoice1() . '<br>';

        $animal = new Cat1();
        $animal -> getVoice1() . '<br>';
        $animal -> getVoice2() . '<br>';

/*      $lion = new Lion();
        $lion -> getVoice1() . '<br>';
        $lion -> getVoice2() . '<br>'; */

        ?>
      </td>
    </td>
</tr></table>

</body>
</html>