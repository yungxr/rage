<?php
require_once __DIR__.'/server/boot.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <link rel="Stylesheet" type="text/css"href="css/stili.css"/>
    <link rel="Stylesheet" type="text/css"href="fonts/icomoon/style.css"/>
    <style>
        h2.forms {
            font-family: system-ui;
            font-weight: 100;
            text-align: center;
            
        }
        divcenter {
            width: 680px;
            display: block;
            top: 45%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
        } form.new_form {
            width: 600px;
           
            display: block;
        }form.new_form textarea {
            width: 99%;
            margin: 10px 0;
            height: 100px;
            resize: none;
            text-indent: 20px;
            padding: 12px 0;
            border: none;
	border-radius: 5px;
        }form.new_form input[type="text"] {
            width: 49%;
            padding: 10px 0;
            text-indent: 15px;
            border: none;
	border-radius: 5px;
        }form.new_form input {
            width: 49%;
            padding: 10px 0;
            text-indent: 15px;
        }form.new_form {
            width: 600px;
            display: block;
            height: 210px;
            padding: 40px;    
                 margin: auto;}
        
        button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #00e8ec;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
        </style>
</head>
<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.html" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.php" class="nav-link px-2 text-white">Главная</a></li>
              <li><a href="katalog.php" class="nav-link px-2 text-white">Католог</a></li>
              <li><a href="#" class="nav-link px-2 text-secondary">Поддержка</a></li>
            </ul>
            <div class="cart" id="cart">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"> 
                  <i class="icon-shopping-cart"></i> </a>
                  
              </div>
    
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>

            <?php
                if (check_auth()) {
                  // Получим данные пользователя по сохранённому идентификатору
                  $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
                  $stmt->execute(['id' => $_SESSION['user_id']]);
                  $user = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
               <div class="text-end">
              <a  href="account.php" class="btn btn-warning  me-2">Личный кабинет</a>
            </div>
        
                <?php
                } else { ?>
                <div class="text-end">
              <a  href="register.php" class="btn btn-warning  me-2">Вход/Регистрация</a>
            </div>
                <?php  }  ?>

          </div>
        </div>
      </header>


      <divcenter>
		<h2 class="forms text-white">Напишите нам </h2>
		<form method="post" action="server/post.php" class="new_form"> 
			<input type="text" name="name" id_about="name"  title="Введите ваше имя" placeholder="Имя"  required="" >
			<input type="text" name="email" id_about="email" placeholder="Почта" required="">
			<textarea name="txt" id_about="txt" placeholder="Сообщение" required=""></textarea>
			<button type="submit">Отправить</button>
		</form>
	</divcenter>



  
  <footer class="bg-dark text-center text-white fixed-bottom">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- VK -->
        Подпешитесь на нас:
        <a class="btn btn-outline-light btn-floating m-1" href="https://vk.ru/" role="button"
          ><i class="icon-vk"></i
        ></a>
  
        <!-- Telegram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://web.telegram.org/k/" role="button"
          ><i class="icon-telegram"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="icon-instagram"></i></a>
      </section>
      <a href="#" class=" px-2 text-white">Правообладателям</a>
      <a href="politika.html" class=" px-2 text-white">Пользовательское соглашение </a>
      <a href="#" class=" px-2 text-white">Справка</a>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Авторское право:
      <a class="text-white" href="#">Mayer.com</a>
    </div>
    
  </footer>
</body>


</html>