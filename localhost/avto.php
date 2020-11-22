<?php
    $fam = filter_var(trim($_POST['fam']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $patr = filter_var(trim($_POST['patr']),
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $psw = filter_var(trim($_POST['psw']),
    FILTER_SANITIZE_STRING);
    $pswrepeat = filter_var(trim($_POST['psw_repeat']),
    FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'singa_service');
    
    $result = $mysql->query("SELECT * FROM `clients` WHERE `login_c` = '$login' AND `password_c` = '$psw'");

    $user = $result->fetch_assoc();
    // print_r('login: ' .$login . " " . 'pas: ' .$psw );
    if(count($user) == 0)
    {
        echo "Такой пользовтель не найден";
        exit();
    }
    // print_r($user);
    setcookie('surname', $user['surn_c'], time() + 3600);
    setcookie('name', $user['name_c'], time() + 3600, "/");
    setcookie('patr', $user['patr_c'], time() + 3600, "/");

    $mysql->close();
    header('Location: /avtorization.php');
?>