<?php
error_reporting(E_ALL);
ob_start();
session_start();

if (empty($_COOKIE['color']) && empty($_GET)) {
    $color = 'black';
    $content = require_once 'content.php';
    require_once 'main.php';
}
elseif (isset($_GET['color'])) {
    setcookie('color', $_GET['color']);
    $_SESSION[date('Y:m:d H:i:s')] = $_GET['color'];
    header("Location: /");
}
elseif (isset($_GET['page']) && $_GET['page'] === 'history') {
    require_once 'history.php';
    require_once 'main.php';
}
elseif (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
    $content = require_once 'content.php';
    require_once 'main.php';
}
