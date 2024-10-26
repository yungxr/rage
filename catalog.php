<?php
require_once __DIR__.'/server/boot.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="Stylesheet" type="text/css"href="css/catalog.css"/>
    <link rel="Stylesheet" type="text/css"href="css/style.css"/>
    <link rel="Stylesheet" type="text/css"href="fonts/icomoon/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="p-3 bg-head">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <object type="image/svg+xml" data="logo.svg" width="100" height="100">
                <img src="image/rage.png" alt="image format png" />
              </object>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="index.php" class="nav-link px-2 text-white">Главная</a></li>
              <li><a href="#" class="nav-link px-2 text-secondary">Каталог</a></li>
              <li><a href="contact.php" class="nav-link px-2 text-white">Поддержка</a></li>
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
      
<div class="page-main__genres">
    <div class="mix">
        <div class="mix__container">
            <figure class="mix__item">
                <img class="mix__preview deco-pane" src="image/new-hit.png" srcset="image/new-hit400.png 2x" alt="Новые хиты">
                <figcaption class="mix__link-wrapper">
                    <a href="#" class="mix__link"><span class="mix__name" style="color: #ffffff;">Новые хиты</span></a>
                </figcaption>
            </figure>
            <figure class="mix__item">
                <img class="mix__preview deco-pane" src="image/Hip-hop.png" srcset="image/Hip-hop400.png 2x" alt="Хип-хоп">
                <figcaption class="mix__link-wrapper">
                    <a href="#" class="mix__link"><span class="mix__name" style="color: #ffffff;">Хип-хоп</span></a>
                </figcaption>
            </figure>
            <figure class="mix__item">
                <img class="mix__preview deco-pane" src="image/rep.png" srcset="image/rep400.png 2x" alt="Реп">
                <figcaption class="mix__link-wrapper">
                    <a href="#" class="mix__link"><span class="mix__name" style="color: #ffffff;">Реп</span></a>
                </figcaption>
            </figure>
            <figure class="mix__item">
                <img class="mix__preview deco-pane" src="image/rock.png" srcset="image/rock400.png 2x" alt="Рок">
                <figcaption class="mix__link-wrapper">
                    <a href="#" class="mix__link"><span class="mix__name" style="color: #ffffff;">Рок</span></a>
                </figcaption>
            </figure>
            <figure class="mix__item">
                <img class="mix__preview deco-pane" src="image/vech-hit.png" srcset="image/vech-hit400.png 2x" alt="Вечные хиты">
                <figcaption class="mix__link-wrapper">
                    <a href="#" class="mix__link"><span class="mix__name" style="color: #ffffff;">Вечные хиты</span></a>
                </figcaption>
            </figure>
            <figure class="mix__item">
                <img class="mix__preview deco-pane" src="image/mahin-time.png" srcset="image/mahin-time400.png 2x" alt="Машина времени">
                <figcaption class="mix__link-wrapper">
                    <a href="#" class="mix__link"><span class="mix__name" style="color: #ffffff;">Машина времени</span></a>
                </figcaption>
            </figure>
            </div>
        </div>
    </div>







      
    <footer class="bg-dblue text-center text-white fixed-bottom">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
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
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2024 Авторское право:
          <a class="text-white" href="#">Rage.com</a>
        </div>
        
      </footer>
</body>


</html>