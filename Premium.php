<?php

require_once 'User.php';

class Premium extends User{

    public $premium;
    private $duration;

    function __construct($_name="", $_surname="", $_premium=false, $_duration){
        parent::__construct($_name, $_surname);
        $this->premium = $_premium;
        $this->duration = $_duration;
    }
}


?>
