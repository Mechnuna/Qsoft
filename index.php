<?php

include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>
<body class="bg-white text-gray-600 font-sans leading-normal text-base tracking-normal flex min-h-screen flex-col">
<div class="wrapper flex flex-1 flex-col bg-gray-100">
    <main class="flex-1 container mx-auto bg-white overflow-hidden px-4 sm:px-6">
        <div class="py-4 pb-8">
            <h1 class="text-black text-3xl font-bold mb-4">Главная страница</h1>
            
            <div class="space-y-4">
                <p>Ниже представлен пример отображения контента</p>

                <table class="border border-collapse">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Страница</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Верстка страницы</th>
                            <th class="border px-4 py-2 border-gray-600 bg-gray-200 font-bold text-center">Описание страницы</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Личный кабинет</td>
                            <td class="border px-4 py-2"><a href="/account/" class="text-gray-600 hover:text-orange">/account/</a></td>
                            <td class="border px-4 py-2">Страница профиля авторизованного пользователя</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Каталог моделей</td>
                            <td class="border px-4 py-2"><a href="/catalog/" class="text-gray-600 hover:text-orange">/catalog/</a></td>
                            <td class="border px-4 py-2">Отображается каталог моделей, доступна только авторизованному пользователю</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Gui для веб-форм</td>
                            <td class="border px-4 py-2"><a href="form.html" class="text-gray-600 hover:text-orange">form.html</a></td>
                            <td class="border px-4 py-2">Страница с версткой элементов формы (вспомогательная страница)</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Главная страница</td>
                            <td class="border px-4 py-2"><a href="/" class="text-gray-600 hover:text-orange">index.html</a></td>
                            <td class="border px-4 py-2">Главная страница</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Вложенная страница</td>
                            <td class="border px-4 py-2"><a href="inner.html" class="text-gray-600 hover:text-orange">inner.html</a></td>
                            <td class="border px-4 py-2">Пример отображения контента любой вложенной страницы</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Форма авторизации</td>
                            <td class="border px-4 py-2"><a href="/login/" class="text-gray-600 hover:text-orange">/login/</a></td>
                            <td class="border px-4 py-2">Страница с формой авторизации</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">Страница регистрации</td>
                            <td class="border px-4 py-2"><a href="/registration/" class="text-gray-600 hover:text-orange">/registration/</a></td>
                            <td class="border px-4 py-2">Страница с формой регистрации</td>
                        </tr>
                    </tbody>
                </table>
                <p>Крокодиловая ферма Самут Пракан - самая большая в мире, однако коневодство недоступно берёт кристаллический фундамент, несмотря на то, что все здесь выстроено в оригинальном славянско-турецком стиле. Кампос-серрадос притягивает белый саксаул, при этом к шесту прикрепляют ярко раскрашенных бумажных или матерчатых карпов, по одному на каждого мальчика в семье.</p>
            </div>
        </div>
    </main>
</div>
<?php includeTemplate('footer.php', []);?>
</body>
</html>