<?php

$password = [];

$special_char = ["!", "?", "@", "*", "#", "=", "/", "$", "£", "%", "&", "^"];

$characters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z", "x", "y", "j", "k", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "!", "?", "@", "*", "#", "=", "A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "X", "Y", "J", "K"];

$numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

$letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z", "x", "y", "j", "k", "A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "X", "Y", "J", "K"];


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
      <input type="number" class="form-control" name="password" id="password">
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