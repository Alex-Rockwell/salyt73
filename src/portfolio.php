<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Салют73 — Портфолио</title>
    <meta name="description" content="Не портфолио, а наслаждение! А когда ваша свадьба? Мы знаем, как сделать её невероятно красивой!">
    <meta name="keywords" content="видео использование пиротехники, видео пиротехника, пиротехника салют видео, пиротехника фото, русская пиротехника видео, салют залп видео, салют фото, салют Фото 1картинки, свадебные салюты фото, свадебный салют видео, Фото 1с цветным дымом, цветной дым видео">
    <meta name="robots" content="index, follow">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pages/portfolio.min.css">

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
                        <span itemprop="name">Портфолио</span>
                        <meta itemprop="position" content="2"/>
                    </p>
                </li>
            </ol>
        </nav>

        <section class="portfolio section-first">
            <h1 class="portfolio__title section-title">Портфолио</h1>


            <ul class="portfolio__list-filter">
                    <div onclick="goPortfolio('prof')" class="portfolio__filter portfolio__link_prof">Профсалюты</div>
                    <div onclick="goPortfolio('pyro')" class="portfolio__filter portfolio__link_pyro">Пиротехническое шоу</div>
                    <div onclick="goPortfolio('wedd')" class="portfolio__filter portfolio__link_wedd">Свадебный фейерверк</div>
                    <div onclick="goPortfolio('heavy')" class="portfolio__filter portfolio__link_heavy">Тяжелый дым</div>
                    <div onclick="goPortfolio('cold-fountains')" class="portfolio__filter portfolio__link_cold-fountains">Холодные фонтаны</div>
                    <div onclick="goPortfolio('fire')" class="portfolio__filter portfolio__link_fire">Горящие фонтаны</div>
                    <div onclick="goPortfolio('bengals')" class="portfolio__filter portfolio__link_bengals">Бенгальские огни и хлопушки</div>
                    <div onclick="goPortfolio('colored-smoke')" class="portfolio__filter portfolio__link_colored-smoke">Цветной дым</div>
                </li>
            </ul>


            <ul class="portfolio__list" id="portfolio__list">
            <!-- <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-1.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-1.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-1.jpg" alt="Фото 1" class="portfolio__item-img">
                        </picture>
                    </a>
                </li> -->
                <!-- <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-2.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-2.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-2.jpg" alt="Фото 2" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-3.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-3.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-3.jpg" alt="Фото 3" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-4.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-4.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-4.jpg" alt="Фото 4" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-5.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-5.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-5.jpg" alt="Фото 5" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-6.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-6.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-6.jpg" alt="Фото 6" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-7.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-7.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-7.jpg" alt="Фото 7" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-8.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-8.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-8.jpg" alt="Фото 8" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-9.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-9.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-9.jpg" alt="Фото 9" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-10.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-10.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-10.jpg" alt="Фото 10" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-11.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-11.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-11.jpg" alt="Фото 11" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-12.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-12.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-12.jpg" alt="Фото 12" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-13.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-13.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-13.jpg" alt="Фото 13" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-14.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-14.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-14.jpg" alt="Фото 14" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-15.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-15.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-15.jpg" alt="Фото 15" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-16.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-16.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-16.jpg" alt="Фото 16" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-17.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-17.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-17.jpg" alt="Фото 17" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-18.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-18.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-18.jpg" alt="Фото 18" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-19.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-19.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-19.jpg" alt="Фото 19" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-20.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-20.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-20.jpg" alt="Фото 20" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-21.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-21.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-21.jpg" alt="Фото 21" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-22.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-22.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-22.jpg" alt="Фото 22" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-23.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-23.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-23.jpg" alt="Фото 23" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-24.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-24.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-24.jpg" alt="Фото 24" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-25.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-25.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-25.jpg" alt="Фото 25" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-26.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-26.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-26.jpg" alt="Фото 26" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-27.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-27.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-27.jpg" alt="Фото 27" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-28.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-28.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-28.jpg" alt="Фото 28" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-29.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-29.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-29.jpg" alt="Фото 29" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-30.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-30.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-30.jpg" alt="Фото 30" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-31.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-31.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-31.jpg" alt="Фото 31" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-32.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-32.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-32.jpg" alt="Фото 32" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-33.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-33.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-33.jpg" alt="Фото 33" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-34.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-34.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-34.jpg" alt="Фото 34" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-35.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-35.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-35.jpg" alt="Фото 35" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-36.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-36.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-36.jpg" alt="Фото 36" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-37.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-37.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-37.jpg" alt="Фото 37" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-38.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-38.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-38.jpg" alt="Фото 38" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-39.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-39.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-39.jpg" alt="Фото 39" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-40.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-40.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-40.jpg" alt="Фото 40" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-41.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-41.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-41.jpg" alt="Фото 41" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-42.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-42.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-42.jpg" alt="Фото 42" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-43.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-43.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-43.jpg" alt="Фото 43" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-44.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-44.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-44.jpg" alt="Фото 44" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-45.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-45.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-45.jpg" alt="Фото 45" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-46.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-46.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-46.jpg" alt="Фото 46" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-47.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-47.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-47.jpg" alt="Фото 47" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-48.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-48.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-48.jpg" alt="Фото 48" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-49.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-49.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-49.jpg" alt="Фото 49" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-50.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-50.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-50.jpg" alt="Фото 50" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-51.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-51.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-51.jpg" alt="Фото 51" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-52.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-52.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-52.jpg" alt="Фото 52" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-53.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-53.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-53.jpg" alt="Фото 53" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-54.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-54.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-54.jpg" alt="Фото 54" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-55.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-55.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-55.jpg" alt="Фото 55" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-56.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-56.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-56.jpg" alt="Фото 56" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-57.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-57.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-57.jpg" alt="Фото 57" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-58.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-58.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-58.jpg" alt="Фото 58" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-59.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-59.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-59.jpg" alt="Фото 59" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-60.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-60.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-60.jpg" alt="Фото 60" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-61.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-61.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-61.jpg" alt="Фото 61" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-62.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-62.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-62.jpg" alt="Фото 62" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-63.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-63.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-63.jpg" alt="Фото 63" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-64.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-64.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-64.jpg" alt="Фото 64" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-65.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-65.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-65.jpg" alt="Фото 65" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-66.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-66.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-66.jpg" alt="Фото 66" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-67.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-67.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-67.jpg" alt="Фото 67" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-68.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-68.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-68.jpg" alt="Фото 68" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-69.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-69.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-69.jpg" alt="Фото 69" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-70.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-70.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-70.jpg" alt="Фото 70" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-71.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-71.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-71.jpg" alt="Фото 71" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-72.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-72.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-72.jpg" alt="Фото 72" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-73.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-73.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-73.jpg" alt="Фото 73" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-74.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-74.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-74.jpg" alt="Фото 74" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-75.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-75.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-75.jpg" alt="Фото 75" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-76.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-76.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-76.jpg" alt="Фото 76" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-77.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-77.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-77.jpg" alt="Фото 77" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-78.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-78.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-78.jpg" alt="Фото 78" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-79.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-79.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-79.jpg" alt="Фото 79" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-80.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-80.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-80.jpg" alt="Фото 80" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-81.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-81.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-81.jpg" alt="Фото 81" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-82.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-82.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-82.jpg" alt="Фото 82" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-83.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-83.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-83.jpg" alt="Фото 83" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-84.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-84.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-84.jpg" alt="Фото 84" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-85.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-85.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-38.jpg" alt="Фото 85" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-86.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-86.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-86.jpg" alt="Фото 86" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-87.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-87.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-87.jpg" alt="Фото 87" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-88.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-88.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-88.jpg" alt="Фото 88" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-89.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-89.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-89.jpg" alt="Фото 89" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-90.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-90.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-90.jpg" alt="Фото 90" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-91.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-91.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-91.jpg" alt="Фото 91" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-92.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-92.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-92.jpg" alt="Фото 92" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-93.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-93.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-93.jpg" alt="Фото 93" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-94.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-94.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-94.jpg" alt="Фото 94" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-95.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-95.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-95.jpg" alt="Фото 95" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-96.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-96.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-96.jpg" alt="Фото 96" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-97.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-97.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-97.jpg" alt="Фото 97" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-98.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-98.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-98.jpg" alt="Фото 98" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-99.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-99.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-99.jpg" alt="Фото 99" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-100.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-100.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-100.jpg" alt="Фото 100" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-101.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-101.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-101.jpg" alt="Фото 101" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-102.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-102.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-102.jpg" alt="Фото 102" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-103.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-103.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-103.jpg" alt="Фото 103" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-104.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-104.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-104.jpg" alt="Фото 104" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-105.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-105.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-105.jpg" alt="Фото 105" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-106.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-106.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-106.jpg" alt="Фото 106" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-107.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-107.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-107.jpg" alt="Фото 107" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-108.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-108.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-108.jpg" alt="Фото 108" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-109.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-109.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-109.jpg" alt="Фото 109" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-110.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-110.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-110.jpg" alt="Фото 110" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-111.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-111.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-111.jpg" alt="Фото 111" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-112.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-112.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-112.jpg" alt="Фото 112" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-113.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-113.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-113.jpg" alt="Фото 113" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-114.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-114.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-114.jpg" alt="Фото 114" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-115.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-115.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-115.jpg" alt="Фото 115" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-116.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-116.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-116.jpg" alt="Фото 116" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-117.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-117.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-117.jpg" alt="Фото 117" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-118.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-118.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-118.jpg" alt="Фото 118" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-119.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-119.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-119.jpg" alt="Фото 119" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-120.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-120.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-120.jpg" alt="Фото 120" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-121.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-121.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-121.jpg" alt="Фото 121" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-122.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-122.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-122.jpg" alt="Фото 122" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-123.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-123.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-123.jpg" alt="Фото 123" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-124.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-124.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-124.jpg" alt="Фото 124" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-125.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-125.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-125.jpg" alt="Фото 125" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-126.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-126.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-126.jpg" alt="Фото 126" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-127.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-127.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-127.jpg" alt="Фото 127" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-128.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-128.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-128.jpg" alt="Фото 128" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-129.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-129.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-129.jpg" alt="Фото 129" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-130.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-130.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-130.jpg" alt="Фото 130" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-131.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-131.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-131.jpg" alt="Фото 131" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-132.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-132.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-132.jpg" alt="Фото 132" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-133.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-133.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-133.jpg" alt="Фото 133" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-134.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-134.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-134.jpg" alt="Фото 134" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-135.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-135.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-135.jpg" alt="Фото 135" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-136.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-136.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-136.jpg" alt="Фото 136" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-137.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-137.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-137.jpg" alt="Фото 137" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-138.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-138.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-138.jpg" alt="Фото 138" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-139.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-139.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-139.jpg" alt="Фото 139" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-140.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-140.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-140.jpg" alt="Фото 140" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-141.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-141.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-141.jpg" alt="Фото 141" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-142.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-142.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-142.jpg" alt="Фото 142" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-143.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-143.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-143.jpg" alt="Фото 143" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-144.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-144.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-144.jpg" alt="Фото 144" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-145.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-145.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-145.jpg" alt="Фото 145" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-146.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-146.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-146.jpg" alt="Фото 146" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-147.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-147.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-147.jpg" alt="Фото 147" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-148.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-148.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-148.jpg" alt="Фото 148" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-149.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-149.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-149.jpg" alt="Фото 149" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-150.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-150.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-150.jpg" alt="Фото 150" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-151.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-151.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-151.jpg" alt="Фото 151" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-152.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-152.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-152.jpg" alt="Фото 152" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-153.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-153.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-153.jpg" alt="Фото 153" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-154.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-154.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-154.jpg" alt="Фото 154" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-155.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-155.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-155.jpg" alt="Фото 155" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-156.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-156.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-156.jpg" alt="Фото 156" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-157.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-157.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-157.jpg" alt="Фото 157" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-158.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-158.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-158.jpg" alt="Фото 158" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-159.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-159.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-159.jpg" alt="Фото 159" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-160.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-160.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-160.jpg" alt="Фото 160" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-161.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-161.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-161.jpg" alt="Фото 161" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-162.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-162.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-162.jpg" alt="Фото 162" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-163.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-163.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-163.jpg" alt="Фото 163" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-164.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-164.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-164.jpg" alt="Фото 164" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-165.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-165.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-165.jpg" alt="Фото 165" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-166.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-166.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-166.jpg" alt="Фото 166" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-167.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-167.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-167.jpg" alt="Фото 167" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-168.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-168.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-168.jpg" alt="Фото 168" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-169.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-169.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-169.jpg" alt="Фото 169" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-170.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-170.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-170.jpg" alt="Фото 170" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-171.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-171.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-171.jpg" alt="Фото 171" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-172.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-172.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-172.jpg" alt="Фото 172" class="portfolio__item-img">
                        </picture>
                    </a>
                </li>
                <li class="portfolio__item">
                    <a class="portfolio__item-link" href="imgwebp/pages/portfolio/full/photo-173.webp" data-fslightbox="portfolio">
                        <picture>
                            <source srcset="imgwebp/pages/portfolio/preview/photo-173.webp" type="image/webp">
                            <img src="img/pages/portfolio/preview/photo-173.jpg" alt="Фото 173" class="portfolio__item-img">
                        </picture>
                    </a>
    div

            <!-- <button class="portfolio__more" data-animate-fill>
                <span>Показать ещё</span>
            </button> -->

        
        </section>
        <?php 
            @include 'blocks/stages.php';
            @include 'blocks/subscribe.php';
        ?>
    </main>

    <?php 
        @include 'blocks/footer.php';
    ?>

    <!-- фотогалерея в модальном окне -->
    <script src="js/pages/modalOutput.js"></script>
    <script src="js/modules/inputMask.js"></script>
    <script src="js/libs/imask.js"></script>
    <script src="js/pages/portfolio.js"></script>
    <script src="js/libs/fslightbox.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
            function goPortfolio(cat) {
                let tmpId = cat;
                    $.ajax({
                        type: "POST",
                        url: "goPortfolio.php",
                        data: {id:tmpId}
                        }).done(function(result)
                    {
            $("#portfolio__list").html(result)
            });}
            </script>
</body>
</html>