<?php
require_once __DIR__.'/server/boot.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png" type="image/png">
    <title>Rage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css"href="css/index.css"/>
    <link rel="Stylesheet" type="text/css"href="fonts/icomoon/style.css"/>
    <link rel="Stylesheet" type="text/css"href="css/treck.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="p-3 bg-head">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              

              <object type="image/svg+xml" data="logo.svg" width="100" height="100">
                <img src="image/rage.png" alt="image format png" />
              </object>
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.php" class="nav-link px-2 text-secondary">Главная</a></li>
              <li><a href="catalog.php" class="nav-link px-2 text-white">Каталог</a></li>
              <li><a href="contact.php" class="nav-link px-2 text-white">Поддержка</a></li>
            </ul>
            <div class="cart" id="cart">
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"> 
                <i class="icon-shopping-cart"></i>  </a>
                
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
              <a  href="register.php" class="btn btn-warning  me-2">Вход | Регистрация</a>
            </div>
                <?php  }  ?>
          </div>
        </div>
      </header>

      <div class="bask-p">
        <p>Получай доступ к трекам, которые ты не найдешь нигде! Каждый ремикс сделан с душой и вниманием к деталям, чтобы порадовать даже самых взыскательных меломанов.</p>
      </div>


<footer class="bg-dblue text-center text-white flex-bottom">
  <!-- Grid container -->
  <div class="cont p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- VK -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://vk.com/" role="button"
        ><i class="icon-vk"></i
      ></a>

      <!-- Telegram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://web.telegram.org/" role="button"
        ><i class="icon-telegram"></i
      ></a>
    </section>
    <a href="#" class=" px-2 text-white">Правообладателям</a>
    <a href="politika.html" class=" px-2 text-white">Пользовательское соглашение </a>
    <a href="#" class=" px-2 text-white">Справка</a>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->
  </div>
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2024 Авторское право:
    <a class="text-white" href="#">Rage.com</a>
  </div>
</footer>

<script>
const audio = document.querySelector('audio');
const playBtn = document.querySelector('.play-btn');
const pauseBtn = document.querySelector('.pause-btn');
const seekBar = document.querySelector('.seek-bar');
const volumeSlider = document.getElementById("volumeSlider");

// Play Button
playBtn.addEventListener('click', () => {
  audio.play();
});

// Pause Button
pauseBtn.addEventListener('click', () => {
  audio.pause();
});

// Seek Bar
seekBar.addEventListener('input', () => {
  const seekTime = audio.duration * (seekBar.value / 100);
  audio.currentTime = seekTime;
});
//volumeSlider
volumeSlider.addEventListener("input", function() {
  audio.volume = volumeSlider.value;
});
</script>
</body>
</html>