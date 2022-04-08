<?php

if (isset($_COOKIE['active'])) {
    header("Location: /account/");
}
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';

$error = 0;

if (! empty($_POST['email']) && ! empty($_POST['password']) && ! empty($_POST['name'])
    && ! empty($_POST['password_confirmation'])) {
    $error = takeError($_POST);
} elseif (! empty($_POST)) {
    $error = "Все поля на форме обязательны для заполнения";
}

?>

<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Регистрация</h1>
            <?php
            if ($error == 0 && (! empty($_POST['email']))) {
                includeTemplate("messages/success_message.php", ["message" => "Вы успешно зарегистрированы"]);
                if (empty($_COOKIE['email'])) {
                    setcookie('email', $_POST['email'], (time() + 3600 * 31 + $_SESSION['hook']), '/');
                }
                if (empty($_SESSION['active'])) {
                    $_SESSION['active'] = true;
                    setcookie('active', true, (time() + 3600 * 31 + $_SESSION['hook']), '/');
                }
                header("Location: /account/");
            } elseif ($error) {
                includeTemplate("messages/error_message.php", ['message' => $error]);
            }
            ?>
            <form action ="" method = POST>
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldName" class="text-gray-700 font-bold">ФИО</label>
                            <input id="fieldName" name="name" type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Иванов Иван Иваныч" value ="<?=$_POST['name'] ?? ''?>">
                        </div>
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" name="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com" value ="<?=$_POST['email'] ?? ($_COOKIE['email'] ?? '')?>">
                        </div>
                        <div class="block">
                            <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                            <input id="fieldPassword" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******" value ="<?=$_POST['password'] ?? ''?>">
                        </div>
                        <div class="block">
                            <label for="fieldPasswordConfirmation" class="text-gray-700 font-bold">Подтверждение пароля</label>
                            <input id="fieldPasswordConfirmation" name="password_confirmation" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******" value ="<?=$_POST['password_confirmation'] ?? ''?>">
                        </div>
                        <div class="block">
                            <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Регистрация
                            </button>
                            <a href="/login/" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня уже есть аккаунт
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <?php includeTemplate('footer.php', []);?>
</div>
</body>
</html>