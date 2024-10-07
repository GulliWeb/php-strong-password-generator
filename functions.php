<?php
// Funzione che mi genera una password casuale lunga quanto scelto dall'utente stesso nel form
function generatePassword($length){
    // Dichiaro due variabili: password che sarà la stringa che compone la password generata e che verrà ritornata dalla funzione, characters che essendo una stringa contente tutti i caratteri, per randomizzare attraverso loro e creare la password casuale.
    $password = '';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
   
    // Ciclo for per costruitre la password generata
    for ($i = 0; $i < $length ; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}
?>
