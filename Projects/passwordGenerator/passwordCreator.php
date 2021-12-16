<?php

class passwordCreator {
    private $type = "hard";
    private $limit = 7;

    public function __construct($type, $limit)
    {
        $this -> type = $type;
        $this -> limit = $this->limit;
    }

    public function generate(){
        return "My new password";
    }
}


?>