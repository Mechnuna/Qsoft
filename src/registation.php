<?php

function takeError($mass)
{
    if (strlen($mass['password']) < 6) {
        return "Пароль должен быть не менее шести символов";
    } elseif ($mass['password_confirmation'] != $mass['password']) {
        return "Подтверждение пароля должно совпадать с паролем";
    } else {
        $connect = connect();
        $name = mysqli_real_escape_string($connect, $mass['name']);
        $email = mysqli_real_escape_string($connect, $mass['email']);
        $password_user = mysqli_real_escape_string($connect, $mass['password']);
        $result = mysqli_query($connect, "insert into users set active=1, name='$name', email='$email', password ='$password_user'");
        $result = mysqli_query($connect, "select id from users where email='$email'");
        if (empty($_SESSION['id'])) {
            $_SESSION['id'] = mysqli_fetch_assoc($result)['id'];
        }
    }
    mysqli_close($connect);
    return 0;
}
