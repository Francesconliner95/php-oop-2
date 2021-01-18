<?php

require_once 'User.php';

class Premium extends User{

    public $premium;

    function __construct($_name="", $_surname="", $_premium=false){
        parent::__construct($_name, $_surname);
        $this->premium = $_premium;
    }
}


?>
