<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

$firstArg = "user name";
if (! empty($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    $connect = connect();
    $result = mysqli_query($connect, "select name from users where id = '$user_id'");
    $data_mass = (mysqli_fetch_assoc($result));
    $firstArg = ($data_mass['name']);
}

?>

<!doctype html>
<html class="antialiased" lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/assets/css/form.min.css" rel="stylesheet">
    <link href="/assets/css/tailwind.css" rel="stylesheet">
    <link href="/assets/css/base.css" rel="stylesheet">

    <title>Рога и Сила - Главная страница</title>
    <link href="/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>

<header class="bg-white">
        <div class="border-b">
            <div class="container mx-auto block overflow-hidden px-4 sm:px-6 sm:flex sm:justify-between sm:items-center py-4 space-y-4 sm:space-y-0">
                <div class="flex justify-center">
                    <a href="/" class="inline-block sm:inline hover:opacity-75">
                        <img src="/assets/images/logo.png" width="222" height="30" alt="">
                    </a>
                </div>
                <div>
                    <?php if ((! empty($_SESSION['active']))) {
                        includeTemplate('/singUp.php', ['userName' => $firstArg]);
                    } else {
                        includeTemplate('/singIn.php', []);
                    }?>
                </div>
            </div>
        </div>
        
        <div class="border-b">
            <div class="container mx-auto overflow-hidden px-4 sm:px-6">
                <section class="bg-white py-4">
                    <ul class="list-inside bullet-list-item flex flex-wrap justify-between -mx-5 -my-2">
                        <?php includeTemplate('/menu.php', ['menu' => arraySort(getMenu())]);?>
                    </ul>
                </section>
            </div>
        </div>
    </header>