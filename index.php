<?php
session_start();

include __DIR__ . '/assets/functions/function.php'

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP STRONG PASSWORD</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <div class="container text-center text-white mt-3">
            <h1>STRONG PASSWORD GENERATOR</h1>
            <h2>Genera una password sicura</h2>
        </div>
        <div class="container p-3 bg-acqua rounded">
            <p><?php 
                if (empty($lunghezzaPassword)) {
                    echo 'Nessun parametro valido inserito';
                } else {
                    echo 'la tua password è: ' . passwordGenerator($lunghezzaPassword);
                }
            ?>
            </p>
        </div>
        <div class="container pt-2 form-section mt-2 rounded">
            <div class="col-12 text-start p-5">
                <form action="" method="get">
                    <div class="d-flex justify-content-around align-items-center">
                        <p>Lunghezza Password:</p>
                        <input type="number" min="6" max="12" name="lunghezzaPassword" placeholder="lunghezza password" class="p-1 rounded" style="width:200px;">
                    </div>
                    <div class="d-flex justify-content-around">
                        <p>Consenti ripetizioni di uno o più caratteri:</p>
                        <div class="text-start">

                            <input type="radio" name="RepeatLetters" id="yes" value="yes">
                            <label for="yes">Si</label>

                            <input type="radio" name="RepeatLetters" id="no" value="no">
                            <label for="no">No</label>

                            <input type="checkbox" name="" id="letters">
                            <label for="letters">Lettere</label>

                            <input type="checkbox" name="" id="">
                            <label for="numbers">Numeri</label>

                            <input type="checkbox" name="" id="simbols">
                            <label for="simbols">Simboli</label>
                        </div>
                    </div>
                    <div class="text-start d-flex align-items-center justify-content-center">
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary ms-2">Annulla</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>