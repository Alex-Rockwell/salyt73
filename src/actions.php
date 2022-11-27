<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Акции Салют Ульяновск</title>
    <meta name="description" content="Мы любим яркие эмоции и незабываемые впечатления! И хотим делиться с вами! А больше ярких эмоций только с нашими скидками и приятными бонусами!">
    <meta name="keywords" content="акции салют73, акции салют Ульяновск, смотреть акции салют73">
    <meta name="robots" content="index, follow">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pages/actions.min.css">

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
        <nav class="breadcrumbs" aria-label="Хлебные крошки">
            <ol 
                class="breadcrumbs__list" 
                itemscope 
                itemtype="https://schema.org/BreadcrumbList">
                <li 
                    class="breadcrumbs__item" 
                    itemprop="itemListElement" 
                    itemscope 
                    itemtype="https://schema.org/ListItem">
                    <a 
                        href="/" 
                        class="breadcrumbs__link" 
                        itemprop="item">
                        <span itemprop="name">Главная</span>
                        <meta itemprop="position" content="1"/>
                    </a>
                </li>
                <li 
                    class="breadcrumbs__item" 
                    itemprop="itemListElement" 
                    itemscope 
                    itemtype="https://schema.org/ListItem">
                    <p 
                        class="breadcrumbs__current" 
                        aria-current="page"
                        itemprop="item">
                        <span itemprop="name">Акции</span>
                        <meta itemprop="position" content="2"/>
                    </p>
                </li>
            </ol>
        </nav>

        <section class="actions section-first">
            <h1 class="articles__title section-title">Акции</h1>
            <p class="actions__descr">Мы любим яркие эмоции и незабываемые впечатления! И хотим делиться с вами! А больше ярких эмоций только с нашими скидками и приятными бонусами!</p>
        </section>

        <?php 
            @include 'blocks/banner.php';
        ?>
    </main>

    <?php 
        @include 'blocks/footer.php'
    ?>
    <script src="js/pages/modalOutput.js"></script>
    <script src="js/modules/inputMask.js"></script>
    <script src="js/libs/imask.js"></script>
    <script src="js/pages/actions.js"></script>
</body>
</html>