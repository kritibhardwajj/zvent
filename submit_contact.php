<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  $entry = "Name: $name, Email: $email, Message: $message\n";
  file_put_contents('contacts.txt', $entry, FILE_APPEND);
  header('Location: contact.html');
  exit();
}
?>
