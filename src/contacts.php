<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Салют73 — Контакты</title>
    <meta name="description" content="Основная информация о компании «Салют Ульяновск», предлагаемых товарах и услугах.">
    <meta name="keywords" content="салют ульяновск, компания салютов и фейерверков, салюты региона 73">
    <meta name="robots" content="index, follow">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pages/contacts.min.css">

    <script>
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(88438536, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VZWH7EPZ0K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VZWH7EPZ0K');
    </script>
</head>
<body>
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/88438536" style="position:absolute; left:-9999px;" alt="Яндекс Метрика"/>
        </div>
    </noscript>

    <header class="header header_1920">
        <div class="header__container">
            <h2 class="sr-only">Шапка сайта</h2>
            <?php 
                @include 'blocks/header-logo.php';
            ?>

            <div class="header__activity-wrapper">
                <span class="header__activity">Организация и продажа салютов и пиротехники</span>
            </div>

            <?php 
                @include 'blocks/header-info.php';
                @include 'blocks/callback.php';
            ?>
        </div>
        <?php 
            @include 'blocks/header-menu.php';
        ?>
    </header> 

    <?php 
        @include 'blocks/header991.php'; 
    ?>

    <main class="main">
        <h1 class="sr-only">Контакты</h1>
        <?php 
            @include 'blocks/contacts.php'
        ?>
    </main>

    <?php 
        @include 'blocks/footer.php';
    ?>
    <script src="js/pages/modalOutput.js"></script>
    <script src="js/modules/inputMask.js"></script>
    <script src="js/pages/contacts.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=92d2de59-e610-4dd0-afb7-3d4d311cd139&lang=ru_RU">
    </script>
    <script src="js/libs/imask.js"></script>
</body>
</html>