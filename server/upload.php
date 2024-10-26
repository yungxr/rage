<?php
// Проверяем, был ли выбран файл
if ($_FILES['file']['name']) {
  // Подключаемся к базе данных
  $db = new mysqli('127.0.0.1', 'root', '', 'mayer');
  
  // Получаем информацию о файле
  $filename = $_FILES['file']['name'];
  $filesize = $_FILES['file']['size'];
  $filetype = $_FILES['file']['type'];
  $filecontent = file_get_contents($_FILES['file']['tmp_name']);
  
  // Сохраняем информацию о файле в базе данных
  $stmt = $db->prepare('INSERT INTO audio_files (filename, filesize, filetype, filecontent) VALUES (?, ?, ?, ?)');
  $stmt->bind_param('siss', $filename, $filesize, $filetype, $filecontent);
  $stmt->execute();
  
  // Закрываем соединение с базой данных
  $db->close();
}
header('Location: /adminpanel.php');
?>
