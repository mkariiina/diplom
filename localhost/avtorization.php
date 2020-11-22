<?php
        if($_COOKIE['surname'] == ''):
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="reset.css">
    <link rel = "stylesheet" href ="style.css">
    <title>авторизация</title>
</head>
<body>
    <header class="header">
        <div class="header_wrapper">
                 <div class="header_logo">
                     <a href="index.html" class="header_logo-link header_logo-pig">
                         <img src="pic/svg/logo_original.svg" alt="Document" class="header_logo-pig">
                     </a>
                 </div>
         <div class="right">
                 <div class="number">
                     <p class="style">Заказать звонок</p>
                     <a href="tel:+7(928)-767-87-89" class="number_style">8(928)-767-87-89</a>
                 </div>
             <nav class="header_nav">
               <ul class="header_list">
                 <li class="header_item">
                     <a href="about-us.html" class="header_link">О нас</a>
                 </li>

                 <li class="header_item">
                     <a href="catalog.html" class="header_link">Каталог товаров</a>
                 </li>

                <li class = "header_item">
                    <a href="services.html" class = "header_link">Услуги</a>
                </li>

                 <li class="header_item">
                     <a href="registration.html" class="header_link">Регистрация/авторизация</a>
                 </li>
                 </ul>
             </nav> 
         </div>
        </div>
     </div>
 </header>
 <main>

 
    <form action="avto.php" method="POST">
        <div class="container">
          
          <hr>

          <label for="name"><b>Логин</b></label>
          <input type="text" placeholder="Введите логин" name="login" required>
      
          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="psw" required>

          <button type="submit" class="registerbtn">Авторизироваться</button>
        </form>
        <?php else: ?>
               <?=$_COOKIE['surname']?>
               <?=$_COOKIE['name']?>
               <?=$_COOKIE['patr']?>
               <button onclick = "window.location.href='/delete.php'">Выйти</button>
        <?php endif;?>
 </main>
</body>
</html>