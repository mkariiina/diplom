<?php
setcookie('surname', $user['surn_c'], time() - 3600, "/");
setcookie('name', $user['name_c'], time() - 3600, "/");
setcookie('patr', $user['patr_c'], time() - 3600, "/");
header('Location: /avtorization.php');
?>