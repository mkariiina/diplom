<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="reset.css">
    <link rel = "stylesheet" href ="style.css">
    <title>Регистрация</title>
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

    <form action="connection.php" method="POST">
        <div class="container">
          <h1 class ="reg-title">Регистрация</h1>
          <p class="reg-descr">Заполните форму, чтобы зарегистрироваться на сайте</p>
          <hr>
      
          <label for="Fam"><b>Фамилия</b></label>
          <input type="text" placeholder="Введите фамилию" name="fam" required>

          <label for="name"><b>Имя</b></label>
          <input type="text" placeholder="Введите имя" name="name" required>

          <label for="name"><b>Отчество</b></label>
          <input type="text" placeholder="Введите отчество" name="patr" required>

          <label for="name"><b>Логин</b></label>
          <input type="text" placeholder="Введите логин" name="login" required>
      
          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="psw" required>
      
          <label for="psw-repeat"><b>Повторите пароль</b></label>
          <input type="password" placeholder="Повторно введите пароль" name="psw-repeat" required>
          <hr>
      
          <p>Регистрируясь на сайте, вы соглашаетесь с нашей <a href="#">политикой конфеденциальности</a>.</p>
          <button type="submit" class="registerbtn">Зарегистрироваться</button>

        </div>
      
        <div class="container signin">
          <p>У вас уже есть аккаунт? <a href="avtorization.php">Авторизироваться</a>.</p>
        </div>

      </form>
        
      </main>
</body>
</html>