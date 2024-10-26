<?php

require_once __DIR__.'/boot.php';

$stmt = pdo()->prepare("INSERT INTO `about` (`name`,`email`, `txt`) VALUES (:name,:email, :txt)");
$stmt->execute([
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'txt' => $_POST['txt'] 
]);

header('Location: /contact.php');