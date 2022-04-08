<?php
if (isset($_COOKIE['active'])) {
    header("Location: /account/");
}

include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';


$error = false;
$good = false;

if (! empty($_POST['email']) && ! empty($_POST['password'])) {
    $connect = connect();
    $user_email = mysqli_real_escape_string(connect(), $_POST['email']);
    $result = mysqli_query($connect, "select id, password, email, active from users where email='$user_email' LIMIT 1");
    isActive2($result) ? $good = true : $error = true;
    mysqli_close($connect);
}


?>

<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Авторизация</h1>

            
            <?php
            if ($error && (! empty($_COOKIE['deactive_user']))) {
                includeTemplate("messages/error_message.php", ['message' => 'Доступ запрещен']);
            } elseif ($good) {
                includeTemplate("messages/success_message.php", ['message' => 'Вы успешно авторизовались']);
                header("Location: /account/");
            } elseif ($error) {
                includeTemplate("messages/error_message.php", ['message' => 'Неверно указан логин или пароль']);
            }?>
            <form action ="" method = POST>
                <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                        <div class="block">
                            <label for="fieldEmail" class="text-gray-700 font-bold">Email</label>
                            <input id="fieldEmail" name="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="john@example.com" value ="<?=$_POST['email'] ?? ($_COOKIE['email'] ?? '')?>">
                        </div>
                        <div class="block">
                            <label for="fieldPassword" class="text-gray-700 font-bold">Пароль</label>
                            <input id="fieldPassword" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="******" value ="<?php echo($_POST['password'] ?? '')?>">
                        </div>
                        <div class="block">
                            <button type="submit" class="inline-block bg-orange hover:bg-opacity-70 focus:outline-none text-white font-bold py-2 px-4 rounded">
                                Войти
                            </button>
                            <a href="/register.html" class="inline-block hover:underline focus:outline-none font-bold py-2 px-4 rounded">
                                У меня нет аккаунта
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
