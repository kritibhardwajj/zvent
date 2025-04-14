<?php
session_start();
$login_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username === 'admin' && $password === 'password') {
    $_SESSION['logged_in'] = true;
    header('Location: admin.php');
    exit();
  } else {
    $login_error = 'Invalid username or password';
  }
}
?>