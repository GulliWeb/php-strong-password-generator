<?php
// Dichiaro la variabili e raccolgo i dati arrivati in input dall'utente
$passLength = isset(($_GET["numPass"])) ? $_GET["numPass"] : 0;;
$generatedPassword = '';

// Funzione che mi genera una password casuale lunga quanto scelto da lui stesso nel form
function generatePassword($length){
    // Dichiaro due variabili: password che sarà la stringa che compone la password generata e che verrà ritornata dalla funzione, characters essendo una stringa contente tutti i caratteri per randomizzare poi attraverso questa variabile e creare la password casuale.
    $password = '';
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
   
    // Ciclo for per costruitre la password generata
    for ($i = 0; $i < $length ; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

    // Creo una condizione if che verifica se l'utente ha inviato il form (premuto il bottone) ed ha inserito una lunghezza (>0) per generare la password.
    if($passLength > 0){
        $generatedPassword = generatePassword($passLength);
        echo($generatedPassword);
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PASSWORD GENERATOR</title>
</head>
<body>
    <div class="title">
        <h1>
            Strong Password Generator
        </h1>
        <h2>
            Genera una password sicura
        </h2>
    </div>

    <div class="card-wrapper">
        <div class="card">
            <form action="" method="get">
                <label for="numPass"></label>
                <input id="numPass" name="numPass" type="number" min="1" max="20">
                <button id="btnSubmit" name="btnSubmit" type="submit" >
                    Invia
                </button>
                <button id="btnReset" name="btnReset" type="reset">
                    Annulla
                </button>
            </form>
        </div>
    </div>

    
</body>
</html>