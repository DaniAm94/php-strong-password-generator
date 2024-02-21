<?php
session_start();
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
    <h1>La tua password: <em><?= $password ?></em></h1>
    <a href="index.php?new=true">Crea una nuova password</a>
</header>
</div>
    
</body>
</html>