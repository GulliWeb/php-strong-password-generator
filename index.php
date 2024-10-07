<?php


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