<?php
require_once __DIR__.'/boot.php';
$stmt = pdo()->prepare("DELETE  FROM `users` WHERE `id`=:id ");
$stmt->execute([
    'id'=>$_POST['id']
    
]);
header('Location: /index.php');



