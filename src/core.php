<?php

include $_SERVER['DOCUMENT_ROOT'] . '/src/includeTemplate.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/arraySort.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/cutString.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/getCars.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/getMenu.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/isActive.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/isActive2.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/registation.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/account_data.php';
include $_SERVER['DOCUMENT_ROOT'] . '/src/dbConnect.php';

if (empty($_SESSION['hook'])) {
    $_SESSION['hook'] = 1;
} else {
    $_SESSION['hook']++;
}

if (! empty($_GET)) {
    unset($_POST);
    // unset($_COOKIE['email']);
    session_destroy();
    session_unset();
    // $_SESSION = [];
    unset($_SESSION);
    unset($_COOKIE['active']);
    unset($_COOKIE);
    setcookie("email", "", time() - 3600, "/");
    setcookie("active", "", time() - 3600, "/");
    setcookie('deactive_user', "", time() - 3600, "/");
}
