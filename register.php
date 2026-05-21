<?php

// Skapa en databasuppkoppling
require_once('functions.php');
$db = connectToDb();

// Ta hand om värdena från formuläret
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Envägs-kryptera (hasha) lösenordet
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Spara den nya användaren i databasen
$statement = $db->prepare("INSERT INTO users2 (username, password, email) VALUES (?, ?, ?)");
$statement->bind_param('sss', $username, $hashedPassword, $email);
$statement->execute();

// Skicka tillbaka till startsidan
header('Location: index.php');

?>
