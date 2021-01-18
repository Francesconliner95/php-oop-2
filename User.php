<?php

class User{
    public $premium;
    public $name;
    public $surname;
    public $age;
    public $gender;


    function __construct($_name="", $_surname="", $_premium=false){
        $this->name=$_name;
        $this->surname=$_surname;
        $this->premium=$_premium;
    }

    public function setAge($_age){
        if(is_numeric($_age) && $_age>0 && $_age<120){
            $this->age=$_age;
        }elseif (!is_numeric($_age)) {
            throw new Exception('age non è un numero');
        }else{
            throw new Exception('numero non valido');
        }
    }

    public function setGender($_gender){
        $_gender=strtoupper($_gender);
        if($_gender=='O' || $_gender=='M' || $_gender=='F'){
            $this->gender=$_gender;
        }else{
            $this->gender='O'; //valore di default 'OTHER'
            throw new Exception('genere non valido');
        }
    }
}

?>
