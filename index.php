<?php 
$password_length = $_GET['password-length'] ?? '';
var_dump($password_length);
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
        <form class="row g-3 needs-validation border rounded py-4" novalidate>
  <div class="col-12 d-flex justify-content-between">
    <label for="pass-length" class="form-label">Lunghezza password</label>
    <input type="number" class="form-control w-25" id="pass-length" name="password-length" value="" required min="1" max="10">
    <div class="valid-feedback">
      Looks good!
    </div>
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