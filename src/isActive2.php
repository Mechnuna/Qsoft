<?php

function isActive2($result)
{
    $row = mysqli_fetch_assoc($result);
    if ($row['password'] == $_POST['password'] && $row['email'] == $_POST['email']) {
        if ($row['active'] != 1) {
            setcookie('deactive_user', true, (time() + 3600 * 31 + $_SESSION['hook']), '/');
            return false;
        }
        if (empty($_COOKIE['email'])) {
            setcookie('email', $_POST['email'], (time() + 3600 * 31 + $_SESSION['hook']), '/');
        }
        if (empty($_SESSION['active'])) {
            $_SESSION['active'] = true;
            setcookie('active', true, (time() + 3600 * 31 + $_SESSION['hook']), '/');
        }
        if (empty($_SESSION['id'])) {
            $_SESSION['id'] = $row['id'];
        }
        return true;
    }
    return false;
}
