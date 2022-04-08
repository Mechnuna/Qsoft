<?php
// if (!isset($_SESSION['active'])) {
//    header("Location: /login/");
// }

if (!isset($_COOKIE['active'])) {
    header("Location: /login/");
}
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
includeTemplate('cars_catalog.php', ['cars' => getCars()]);
includeTemplate('footer.php', []);
