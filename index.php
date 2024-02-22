<?php 

session_start();
// Se in get è presente una chiave new(l'utente ha cliccato sul link per creare una nuova password) allora distruggi la sessione
if(isset($_GET['new'])){
    session_destroy();
}
// Se è già presente una password tra le variabili di sessione allora vai alla pagina che mostra la password
if(isset($_SESSION['password'])) header('Location: display_password.php');

// Importo lo script con la funzione
require __DIR__.'/scripts/scripts.php';

// Genero la password
if(isset($_GET['password-length'])){
    // Flag per stabilire se avere o no caratteri duplicati nella password
    $no_duplicates= $_GET['no-duplicates'] ?? '';
    $duplicates_check=$no_duplicates? 'checked' :'';

    // Controllo i caratteri ammessi
    $allowed_characters= $_GET['characters'] ?? [];
    $letters_check= in_array('L',$allowed_characters)? 'checked':'';
    $numbers_check= in_array('N',$allowed_characters)? 'checked':'';
    $symbols_check= in_array('S',$allowed_characters)? 'checked':'';
    $error=get_password($_GET['password-length'], $no_duplicates, $allowed_characters);
   if(!$error) header('Location: ./display_password.php');
}
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
    <header class="py-3">
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-center">Genera una password sicura</h2>
    </header>
    <main class="py-3">
        <div class="container-sm">
            <!-- Alert d'errore -->
            <?php if(isset($error)):?>
        <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Errore!</h4>
            <p><?= $error ?></p>
        </div>
        <?php endif?>
        <form class="row g-3 needs-validation border rounded py-4 px-2 " novalidate>

        <!-- Per scegliere la lunghezza della password -->
    <div class="col-12 d-flex justify-content-between">
        <label for="pass-length" class="form-label">Lunghezza password</label>
        <input type="number" class="form-control w-25 <?php if(isset($error)) echo 'is-invalid' ?>" id="pass-length" name="password-length" value="<?= $_GET['password-length']?? 5 ?>" required min="5">
     </div>
        <!-- Toggle per la ripetizione di caratteri nella password -->
    <div class="col-12 form-check form-switch d-flex justify-content-between ps-2">
        <label class="form-check-label" for="char-dup">Disattiva la ripetizione di caratteri</label>
        <input class="form-check-input" type="checkbox" role="switch" name="no-duplicates" id="char-dup" <?= $duplicates_check?? ''?>>
    </div>
    <!-- Checkboxes per la scelta dei caratteri -->
    <div class="form-check offset-10  col-2 d-flex justify-content-end  column-gap-5">
        <label class="form-check-label" for="letters-check">
            Lettere
        </label>
        <input class="form-check-input" type="checkbox" id="letters-check" name="characters[]" <?= $letters_check ?? '' ?> value="L">
    </div>
    <div class="form-check offset-10  col-2 d-flex justify-content-end  column-gap-5">
        <label class="form-check-label" for="numbers-check">
            Numeri
        </label>
        <input class="form-check-input" type="checkbox" id="numbers-check" name="characters[]" <?= $numbers_check ?? '' ?> value="N">
    </div>
    <div class="form-check offset-10  col-2 d-flex justify-content-end  column-gap-5">
        <label class="form-check-label" for="symbols-check">
            Simboli
        </label>
        <input class="form-check-input" type="checkbox" id="symbols-check" name="characters[]" <?= $symbols_check ?? '' ?> value="S">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Conferma</button>
        <button class="btn btn-warning" type="reset">Annulla</button>
    </div>
</form>
        </div>
    </main>
    
</body>
</html>