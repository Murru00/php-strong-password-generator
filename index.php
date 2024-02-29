<?php

$password_security = (int) $_GET['password-security'];

$form_sent = !empty($_GET);



if ($form_sent) {
  $all_chars = "abcdefghilmnopqrstuvzxwykj1234567890!£$%&/()=?^ABCDEFGHILMNOPQRSTUVZWKYJX";
  $rand_char_index = rand(0, strlen( $all_chars) -1);
  $rand_char = $all_chars [$rand_char_index];
}



?>




<!DOCTYPE html>                      
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
    <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">

<div class="card">
  <div class="card-body">
      <form class="row">
    <div class="col-10">
      <label for="" class="form-label">
        Genera la tua password sicura:
      </label>
      <input type="number" class="form-control" name="password-security" id="password-security" value="<?= $password_security ?>">
    </div>
    <div class="col-2 d-flex align-items-end">
      <button class="btn btn-primary w-100">Genera Password</button>
    </div>
  </form>
  </div>
</div>

</div>
    
</body>
</html>