<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Perform username and password validation here
if ($username === 'admin' && $password === 'admin') {
  $_SESSION['loggedIn'] = true;
  header('Location: homepage.html');
} else {
  echo 'Invalid username or password';
}
?>
