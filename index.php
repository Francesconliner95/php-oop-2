<?php

require_once 'User.php';
require_once 'Premium.php';

//UTENTE FREE

$user1 = new User('Paolo','Rossi', false);

try{
    $user1->setAge(50);
}catch(Exception $e){
    echo 'Errore! Messaggio =' . $e->getMessage();
}

try{
    $user1->setGender('M');
}catch(Exception $e){
    echo 'Errore! Messaggio =' . $e->getMessage();
}

echo "UTENTE";
var_dump($user1);


//UTENTE PREMIUM

$premium1 = new Premium('Licia', 'Verdi', true);

try{
    $premium1->setAge(30);
}catch(Exception $e){
    echo 'Errore! Messaggio =' . $e->getMessage();
}

try{
    $premium1->setGender('F');
}catch(Exception $e){
    echo 'Errore! Messaggio =' . $e->getMessage();
}

echo "UTENTE PREMIUM";
var_dump($premium1);

?>
