<?php

require_once __DIR__ . "/functions.php";

$password_length = isset($_GET['password-length']) ? (int) $_GET['password-length'] : 5;

$form_sent = !empty($_GET);

if ($form_sent) {
  
  session_start();

  
  $_SESSION['generated-password'] = generate_password($password_length);

 
  header('Location: ./result.php');
}