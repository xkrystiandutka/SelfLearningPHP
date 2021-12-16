<?php

class passwordCreator {
    
    const LEVEL_EASY = 'easy';
    const LEVEL_MEDIUM = 'medium';
    const LEVEL_HARD = 'hard';

    private $type = "hard";
    private $limit = 7;
    private $easyWords = "cow, dog, fish, fly, fox, moon, bird, car";

    public function __construct($type, $limit)
    {
        $this -> type = $type;
        $this -> limit = $this->limit;
    }

    public function generate(){
        if($this->type == self::LEVEL_EASY){
            return $this -> createEasyPassword();
        }else if($this->type == self::LEVEL_MEDIUM){

        }else if($this->type == self::LEVEL_HARD){
        
        }
        return "An error occurred";
    }

    private function createEasyPassword(){
        $pass = "";
        $word = $this->getRandomEasyWord();
        return $word;

    }

    private function getRandomEasyWord(){
        $ewArray = explode(',', $this->easyWords);
        $key = array_rand($ewArray, 1);
        return trim($ewArray[$key]);
    }
}


?>