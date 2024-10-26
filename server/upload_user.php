<?php

require_once __DIR__.'/boot.php';

$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username");
$stmt->execute(['username' => $_POST['username']]);
if ($stmt->rowCount() > 0) {
    flash('Это имя пользователя уже занято.');
    header('Location: /account.php');
    die;
}
$stmt = pdo()->prepare("UPDATE `users` set `username`=:username, `email`=:email WHERE `id`=:id ");
$stmt->execute([
    'username' => $_POST['username'],
    'email' =>$_POST['email'],
    'id'=>$_POST['id']
    
]);

header('Location: /account.php');