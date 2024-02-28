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

<h1>GENERA LA TUA PASSWORD SICURA</h1>
<form class="row g-3 mt-5 mb-5">
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">INVIA</button>
  </div>
</form>
    
</body>
</html>