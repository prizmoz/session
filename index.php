<?php
ob_start();
session_start();
if (empty($_GET)) {
    $content = require_once 'content.php';
    require_once 'main.php';
}
elseif ($_GET['color'] == 'red') {
    setcookie('color', 'red');
    $_SESSION[date('Y:m:d H:i:s')] = 'red';
    header("Location: /");
}
elseif ($_GET['color'] == 'blue') {
    setcookie('color', 'blue');
    $_SESSION[date('Y:m:d H:i:s')] = 'blue';
    header("Location: /");
}
elseif ($_GET['color'] == 'green') {
    setcookie('color', 'green');
    $_SESSION[date('Y:m:d H:i:s')] = 'green';
    header("Location: /");
}
elseif ($_GET['color'] == 'yellow') {
    setcookie('color', 'yellow');
    $_SESSION[date('Y:m:d H:i:s')] = 'yellow';
    header("Location: /");
}
elseif ($_GET['page'] == 'history') {
    require_once 'history.php';
    require_once 'main.php';
}