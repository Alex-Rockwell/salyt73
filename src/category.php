<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Салют73 — Каталог — Профессиональные салюты</title>
    <meta name="description" content="Салют 73. С 2007 года зажигаем фонтаны, запускаем салюты, устраиваем файершоу, пускаем тяжелый дым, зажигаем сердца, запускаем хлопушки.">
    <meta name="keywords" content="салют 73, салют 73 ульяновск, купить салюты ульяновск, фестивальные шары, профессиональные салюты, салюты-фонтаны, салюты-ракеты ульяновск, петарды, римские свечи, бенгальские огни и хлопушки, пиротехническое шоу">
    <meta name="robots" content="index, follow">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pages/category.min.css">

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
                <span class="header__activity">Интернет-магазин салютов и пиротехники</span>
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
        <nav class="breadcrumbs breadcrumbs_category" aria-label="Хлебные крошки">
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
                    <a 
                        href="catalogue.php" 
                        class="breadcrumbs__link" 
                        itemprop="item">
                        <span itemprop="name">Каталог</span>
                        <meta itemprop="position" content="2"/>
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
                        <span itemprop="name"></span>
                        <meta itemprop="position" content="3"/>
                    </p>
                </li>
            </ol>
        </nav>

        <section class="category section section-category">
            <h1 class="sr-only">Широкий ассортимент товаров</h1>
            <h2 class="category__title section-title"></h2>

            <div class="preload">
                <img src="img/pages/category/icons/video-hover.svg" alt="Иконка видео">
                <img src="img/pages/category/icons/photo-hover.svg" alt="Иконка фото">
            </div>

            <div class="category__buttons">

                <div class="select select-desk" id="select-desk">
                    <div class="select__header">
                        <button class="select__current" style="visibility: hidden; opacity: 0;"></button>
                    </div>
                    <div class="select-desk__wrapper">
                        <div onclick="goCatalog('gender')" class="select__item-button select__item-button_gender">Гендер пати</div>
                        <div onclick="goCatalog('battery')" class="select__item-button select__item-button_battery">Батареи салютов </div> 
                        <div onclick="goCatalog('petard')" class="select__item-button select__item-button_petard">Петарды</div>
                        <div onclick="goCatalog('rim')" class="select__item-button select__item-button_rim">Римские свечи</div>
                        <div onclick="goCatalog('bengal')" class="select__item-button select__item-button_bengal">Бенгальские свечи</div>
                        <div onclick="goCatalog('rocket')" class="select__item-button select__item-button_rocket">Ракеты</div>
                        <div onclick="goCatalog('hlop')" class="select__item-button select__item-button_hlop">Хлопушки</div>
                        <div onclick="goCatalog('nazem')" class="select__item-button select__item-button_nazem">Наземные и летающие фейерверки</div>
                        <div onclick="goCatalog('svechi')" class="select__item-button select__item-button_svechi">Свечи для торта</div>
                        <div onclick="goCatalog('balls')" class="select__item-button select__item-button_balls">Воздушные и геливые шары </div>
                        <div onclick="goCatalog('col-smoke')" class="select__item-button select__item-button_col-smoke">Цветной дым</div>
                        <div onclick="goCatalog('cold-fountains')" class="select__item-button select__item-button_cold-fountains">Холодные фонтаны</div>
                    </div>  
                    <ul class="select__body">
                        <li class="select__item"></li>
                        <li class="select__item"></li>
                        <li class="select__item"></li>
                        <li class="select__item"></li>
                        <li class="select__item"></li>
                        <li class="select__item"></li>
                        <li class="select__item"></li>
                        <li class="select__item"></li>
                    </ul>
                </div>
            </div>
            
            <ul class="category__list" itemscope itemtype="https://schema.org/OfferCatalog" id="category__list">
                
            </ul>
            <li class="category__item category__item" style="list-style: none;" data-category="Гендер пати"></li>

            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script>
            function goCatalog(cat) {
                let tmpId = cat;
                    $.ajax({
                        type: "POST",
                        url: "goCatalog.php",
                        data: {id:tmpId}
                        }).done(function(result)
                    {
            $("#category__list").html(result)
            });}
            </script>


            <!-- <button class="category__more" data-animate-fill>
                <span>Показать ещё</span>
            </button> -->
        </section>

        <?php 
            @include 'blocks/moreModal.php'
        ?>
    </main>

    <?php 
        @include 'blocks/footer.php'
    ?>
    <script src="js/modules/inputMask.js"></script>
    <script src="js/libs/fslightbox.js"></script>
    <script src="js/libs/imask.js"></script>
    <script src="js/pages/category.js"></script>
    <script>

    let card = document.querySelector('.short-list__item');
    console.log(card);
    
    </script>
</body> 
</html>