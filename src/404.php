<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404 — Страница не найдена</title>
    <meta name="description" content="Страница не найдена">
    <meta name="keywords" content="салют 73, салют ульяновск, купить салют ульяновск, страница не найдена, 404 страница ">
    <meta name="robots" content="index, follow">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pages/404.min.css">

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
                <span class="header__activity">Организация и проведение профессиональных салютов</span>
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
        <section class="page-404">
            <h1 class="page-404__title">404, страница не найдена!</h1>
            <a href="catalogue.php" class="page-404__link" data-animate-fill>
                <span>Перейти в каталог</span>
            </a>
        </section>
    </main>

    <?php 
        @include 'blocks/footer.php'
    ?>
    <script src="js/modules/inputMask.js"></script>
    <script src="js/libs/imask.js"></script>
    <script src="js/pages/404.js"></script>
</body>
</html>