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
    echo($fam);
    $mysql->query("INSERT INTO `clients` (`surn_c`, `name_c`, `patr_c`, `login_c`, `password_c`, `password_again`)
    VALUES('$fam', '$name', '$patr', '$login', '$psw', '$psw_repeat')");
    $mysql->close();
    header('Location: /');
    ?>