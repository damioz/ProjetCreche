<?php

session_start();
define('__ROOT__', dirname(dirname(__FILE__)));

spl_autoload_extensions(".class.php,.php");
spl_autoload_register(function ($class) {
    require_once(__ROOT__.'/classe/'. $class .'.class.php');
});

$employeManager = new employeManager();
$result = $employeManager->getByLogin($_POST['login'],$_POST['password']);


if($result == 1)
    {
        $_SESSION['type'] = 'admin';
        $_SESSION['login'] = $_POST['login'];
        header('Location: index.php');
    }
else
    header('Location: signIn.php?prob=1');