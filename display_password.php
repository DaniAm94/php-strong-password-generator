<?php
session_start();
// Se non c'è alcuna password tra le variabili di sessione torna nell'idex.php
if(!isset($_SESSION['password'])){
    header('Location: index.php');
}
$password = $_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Password</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous'/>
</head>
<body>
<div class="container-sm">
<header class="d-flex justify-content-between py-4">
    <div class="alert alert-success text-center " role="alert">
      <h2 class="alert-heading">Password generata con successo!</h2>
      <hr>
      <h4 class="mb-0 text-center">Ecco la tua password: <em><?= $password ?></em></h4>
    </div>
    <a href="index.php?new=true">Crea una nuova password</a>
</header>
</div>
    
</body>
</html>