<?php

if (!isset($_COOKIE['active'])) {
    header("Location: /login/");
}
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
includeTemplate('footer.php', []);
