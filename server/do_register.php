<?php

require_once __DIR__.'/boot.php';

$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username");
$stmt->execute(['username' => $_POST['username']]);
if ($stmt->rowCount() > 0) {
    flash('Это имя пользователя уже занято.');
    header('Location: /register.php');
    die;
}

$stmt = pdo()->prepare("INSERT INTO `users` (`username`,`email`, `password`) VALUES (:username,:email, :password)");
$stmt->execute([
    'username' => $_POST['username'],
    'email' => $_POST['email'],
    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
]);

header('Location: /login.php');