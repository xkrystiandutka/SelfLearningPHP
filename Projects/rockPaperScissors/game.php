<?php
            if(isset($_GET['submit'])){
                $choose = $_GET['choose'];
                $computerchoose = rand(0, 2);

                if($choose == ""){
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice.</div>";
                }else if ($choose == "rock" || $choose == "paper" || $choose == "scissors"){
                    echo "<div class=\"alert alert-dark\" role=\"alert\">Your choice is $choose.</div>";
                    switch ($computerchoose){
                        case 0:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chooses rock.</div>";
                            break;
                        case 1:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chooses paper.</div>";
                            break;
                        case 2:
                            echo "<div class=\"alert alert-warning\" role=\"alert\">The computer chooses scissors.</div>";
                            break;
                    }
                    if (($choose == "rock" && $computerchoose == 0) || ($choose == "paper" && $computerchoose == 1) || ($choose == "scissors" && $computerchoose == 2)){
                        echo "<div class=\"alert alert-info\" role=\"alert\">You chose the same as the computer it's a tie!</div>";
                    }else if(($choose == "rock" && $computerchoose == 2) || ($choose == "paper" && $computerchoose == 0) || ($choose == "scissors" && $computerchoose == 1)){
                        echo "<div class=\"alert alert-success\" role=\"alert\">You have beaten the computer!</div>";
                    }else {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">The computer beats you!</div>";
                    }
                }else{
                    echo "<div class=\"alert alert-danger\" role=\"alert\">Please enter a valid choice.</div>";
                }
            }
        ?>