<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $entry = "Name: $name, Email: $email\n";
  file_put_contents('invites.txt', $entry, FILE_APPEND);
  header('Location: invite.html');
  exit();
}
?>
