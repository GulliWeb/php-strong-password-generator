<?php
// Collego il file functions.php
include 'functions.php';

// Dichiaro la variabili e raccolgo i dati arrivati in input dall'utente
$passLength = isset(($_GET["numPass"])) ? $_GET["numPass"] : 0;;
$generatedPassword = '';

// Creo una condizione if che verifica se l'utente ha inviato il form (premuto il bottone) ed ha inserito una lunghezza (>0) per generare la password.
if($passLength > 0){
    $generatedPassword = generatePassword($passLength);
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP PASSWORD GENERATOR</title>
</head>
<body>
    
    <div class="card">
        <!-- Title -->
        <div class="title text-center">
            <h1>
                Strong Password Generator
            </h1>
            <h2>
                Genera una password sicura
            </h2>
        </div>
    
        <!-- Form -->
         <div class="form-wrapper text-center">
             <form action="" method="get">
                 <label class="w-100 mb-2 text-white" for="numPass">Inserisci la lungheza della password desiderata:</label>
                 <input id="numPass" name="numPass" type="number" min="1" max="20">
                 <button id="btnSubmit" name="btnSubmit" type="submit" >
                     Invia
                 </button>
                 <button id="btnReset" name="btnReset" type="reset">
                     Annulla
                 </button>
             </form>
             <div class="result">
                <input type="text" disabled placeholder="Password generata:" value="<?= $generatedPassword ?>" class="text-white fw-bold">
             </div>
             <div class="andrea-gulli mt-5 text-white">
                Made with &hearts; by Andrea Gulli
             </div>
         </div>
    </div>
</body>    
</html>