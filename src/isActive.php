<?php

function isActive($indexEmail, $indexPass)
{
    if (($indexEmail != $indexPass) ||
    ($indexEmail === false || $indexPass === false)) {
        return false;
    } else {
        if (empty($_COOKIE['email'])) {
            setcookie('email', $_POST['email'], (time() + 3600 * 31 + $_SESSION['hook']), '/');
        }
        if (empty($_SESSION['active'])) {
            $_SESSION['active'] = true;
            setcookie('active', true, (time() + 3600 * 31 + $_SESSION['hook']), '/');
        }
        return true;
    }
}
