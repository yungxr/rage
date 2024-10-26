<?php
require_once __DIR__.'/boot.php';
$stmt = pdo()->prepare("DELETE  FROM `audio_files` WHERE `id`=:id ");
$stmt->execute([
    'id'=>$_POST['id']
    
]);
header('Location: /adminpanel.php');




  
