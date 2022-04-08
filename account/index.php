<?php

if (! isset($_COOKIE['active'])) {
    header("Location: /");
}

include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
$connect = connect();
$user_email = mysqli_real_escape_string($connect, $_COOKIE['email']);
$data_mass = account_data($connect, $user_email);
mysqli_close($connect);
?>

<main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8 space-y-2">
            <h1 class="text-black text-3xl font-bold mb-4">Личный кабинет</h1>
            
            <div class="space-y-2">
                <div class="space-y-2 pb-4 border-b">
                    <p class="text-xl">Мои профиль</p>

                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">ФИО</div>
                        <div class="flex-1 border px-4 py-2"><?=$data_mass[0][5]?></div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Email</div>
                        <div class="flex-1 border px-4 py-2"><?=$data_mass[0][6]?></div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Телефон</div>
                        <div class="flex-1 border px-4 py-2"><?=$data_mass[0][7]?></div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Активность</div>
                        <div class="flex-1 border px-4 py-2"><?=($data_mass[0][8] ? 'Да' : 'Нет')?></div>
                    </div>
                    <div class="flex max-w-xl">
                        <div class="flex-1 border px-4 py-2 bg-gray-200 font-bold">Подписан на рассылку</div>
                        <div class="flex-1 border px-4 py-2"><?=($data_mass[0][9] ? 'Да' : 'Нет')?></div>
                    </div>
                </div>
            </div>
            
            <div class="space-y-2">
                <p class="text-xl">Мои группы</p>

                <ul class="list-inside list-disc">
                    <?php
                    if ($data_mass[0][1]) {
                        foreach ($data_mass as $group) {?>
                    <li><span class="font-bold"><?=$group[1]?></span> - <?=$group[2]?></li>
                        <?php }
                    }?>
                </ul>
            </div>            
        </div>
    </main>
<?php includeTemplate('footer.php', []);?>