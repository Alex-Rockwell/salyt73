<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Салют73 — Каталог салютов и пиротехники</title>
    <meta name="description" content="Широкий ассортимент, гарантия высокого качества! Каталог товаров Салют Ульяновск">
    <meta name="keywords" content="каталог салют73, салют ульяновск каталог, смотреть каталог салют73, новинки салют ульяновск">
    <meta name="robots" content="index, follow">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/pages/catalogue.min.css">
    <link rel="stylesheet" href="css/libs/swiper.min.css"/>

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
                        <span itemprop="name">Каталог салютов и пиротехники</span>
                        <meta itemprop="position" content="2"/>
                    </p>
                </li>
            </ol>
        </nav>

        <section class="catalogue section-first">
            <h1 class="catalogue__title section-title">Каталог салютов и пиротехники</h1>
            <p class="catalogue__name">Товары</p>
            <ul class="catalogue__list">
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_gender">Гендер пати</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_battery">Батареи салютов </a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_petards">Петарды</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_rim">Римские свечи</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_bengal">Бенгальские свечи</a>
                </li>
                 <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_rocket">Ракеты</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_hlop">Хлопушки</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_nazem">Наземные и летающие фейерверки</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_svechi">Свечи для торта</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_balls">Воздушные и гелиевые шары </a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_col-smoke">Цветной дым</a>
                </li>
                <li class="catalogue__item">
                    <a href="category.php" class="catalogue__link catalogue__link_cold-fountains">Холодные фонтаны</a>
                </li>
            </ul>
            <p class="catalogue__name">Услуги</p>
            <ul class="catalogue__list">
                <li class="catalogue__item">
                    <a href="professional-salutes.php" class="catalogue__link catalogue__link_prof">Профсалюты</a>
                </li>
                <li class="catalogue__item">
                    <a href="pyrotechnic-show.php" class="catalogue__link catalogue__link_pyro">Пиротехническое шоу</a>
                </li>
                <li class="catalogue__item">
                    <a href="wedding.php" class="catalogue__link catalogue__link_wedd">Свадебный фейерверк</a>
                </li>
                <li class="catalogue__item">
                    <a href="heavy-smoke.php" class="catalogue__link catalogue__link_heavy">Тяжелый дым</a>
                </li>
                <li class="catalogue__item">
                    <a href="cold-fountains.php" class="catalogue__link catalogue__link_cold">Холодные фонтаны</a>
                </li>
                 <li class="catalogue__item">
                    <a href="fiery-figures.php" class="catalogue__link catalogue__link_fire">Горящие фонтаны</a>
                </li>
                <li class="catalogue__item">
                    <a href="sparkles-and-crackers.php" class="catalogue__link catalogue__link_bengals">Бенгальские огни и хлопушки</a>
                </li>
                <li class="catalogue__item">
                    <a href="colored-smoke.php" class="catalogue__link catalogue__link_colored-smoke">Цветной дым</a>
                </li>
            </ul>
            
        </section>

        <section class="tabs section">
            <h2 class="sr-only">Товары</h2>
            <ul class="tabheader__list">
                <li class="tabheader__item">
                    <button class="tabheader__button tabheader__button_active">Новинки</button>
                </li>
                <li class="tabheader__item">
                    <button class="tabheader__button">Хиты</button>
                </li>
                <li class="tabheader__item">
                    <button class="tabheader__button">Распродажа</button>
                </li>
            </ul>
            <ul 
                class="tabcontent__list"
                itemscope 
                itemtype="https://schema.org/OfferCatalog">
                <li class="tabcontent__item tabcontent__item_active">
                    <div class="swiper tabs__swiper novelties__swiper">
                        <ul class="swiper-wrapper short-list">
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_new">new!</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Тест</h3>
                                    <span class="short-list__label short-list__label_new">new!</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_new">new!</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_new">new!</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <button class="tabs__swiper-arrow tabs__swiper-arrow_next tabs__swiper-arrow_next-novelties" aria-label="Следующий слайд"></button>
                    <button class="tabs__swiper-arrow tabs__swiper-arrow_prev tabs__swiper-arrow_prev-novelties" aria-label="Предыдущий слайд"></button> 
                </li>
                <li class="tabcontent__item">
                    <div class="swiper tabs__swiper hit__swiper">
                        <ul class="swiper-wrapper short-list">
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_hit">хит продаж</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Тест</h3>
                                    <span class="short-list__label short-list__label_hit">хит продаж</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_hit">хит продаж</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_hit">хит продаж</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <button class="tabs__swiper-arrow tabs__swiper-arrow_next tabs__swiper-arrow_next-hit" aria-label="Следующий слайд"></button>
                    <button class="tabs__swiper-arrow tabs__swiper-arrow_prev tabs__swiper-arrow_prev-hit" aria-label="Предыдущий слайд"></button>
                </li>
                <li class="tabcontent__item">
                    <div class="swiper tabs__swiper sale__swiper">
                        <ul class="swiper-wrapper short-list">
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_sale">Sale</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text short-list__price-text_old">8 600 ₽</span>
                                            <span class="short-list__price-text short-list__price-text_new">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Тест</h3>
                                    <span class="short-list__label short-list__label_sale">Sale</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text short-list__price-text_old">8 600 ₽</span>
                                            <span class="short-list__price-text short-list__price-text_new">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_sale">Sale</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text short-list__price-text_old">8 600 ₽</span>
                                            <span class="short-list__price-text short-list__price-text_new">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                            <li 
                                class="swiper-slide short-list__item"
                                itemprop="itemListElement" 
                                itemscope 
                                itemtype="https://schema.org/Offer">
                                <article 
                                    class="short-list__article"
                                    itemprop="itemOffered" 
                                    itemscope 
                                    itemtype="https://schema.org/Product">
                                    <h3 class="short-list__title" itemprop="name">Королевский талер</h3>
                                    <span class="short-list__label short-list__label_sale">Sale</span>
                                    <span class="short-list__category" itemprop="category">Батареи 1’’</span>
                                    <div class="short-list__wrapper">
                                        <picture itemprop="image">
                                            <source srcset="imgwebp/blocks/short-list/akula-vh100-09-02.webp" type="image/webp">
                                            <img class="short-list__img" src="img/blocks/short-list/akula-vh100-09-02.jpg" alt="Коробка товара АКУЛА VH100-09-02">
                                        </picture>
                                        <ul 
                                            class="short-list__list" 
                                            itemprop="description" 
                                            itemscope 
                                            itemtype="https://schema.org/ItemList">
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_charges">9 зарядов</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_duration">17 секунд</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_height">25 метров</span>
                                            </li>
                                            <li 
                                                class="short-list__list-item"
                                                itemprop="itemListElement">
                                                <span class="short-list__list-item-text short-list__list-item-text_effects">4 эффекта</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="short-list__flex">
                                        <div class="short-list__price">
                                            <span class="short-list__price-text short-list__price-text_old">8 600 ₽</span>
                                            <span class="short-list__price-text short-list__price-text_new">
                                                <span itemprop="price" content="4600.00">4 600 </span> 
                                                <span itemprop="priceCurrency" content="RUB">₽</span> 
                                            </span>
                                        </div>
                                        <ul class="short-list__buttons">
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_cart" aria-label="Добавить в корзину">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_cart" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.2143 5.75H12.7143V5.25V4.59375C12.7143 3.59419 12.3254 2.63354 11.63 1.92367C10.9343 1.21344 9.98846 0.8125 9 0.8125C8.01154 0.8125 7.06571 1.21344 6.36998 1.92367C5.67459 2.63354 5.28571 3.59419 5.28571 4.59375V5.25V5.75H5.78571H12.2143ZM13 5.25V5.75H13.5H17.5V18.375C17.5 18.9419 17.2793 19.4835 16.8897 19.8813C16.5004 20.2787 15.9746 20.5 15.4286 20.5H2.57143C2.02542 20.5 1.49963 20.2787 1.11033 19.8813C0.720691 19.4835 0.5 18.9419 0.5 18.375V5.75H4.5H5V5.25V4.59375C5 3.50473 5.42388 2.46234 6.1752 1.69537C6.92618 0.928746 7.9425 0.5 9 0.5C10.0575 0.5 11.0738 0.928746 11.8248 1.69537C12.5761 2.46234 13 3.50473 13 4.59375V5.25ZM1.28571 6.0625H0.785714V6.5625V18.375C0.785714 18.8524 0.9714 19.3123 1.30511 19.653C1.63917 19.994 2.09446 20.1875 2.57143 20.1875H15.4286C15.9055 20.1875 16.3608 19.994 16.6949 19.653C17.0286 19.3123 17.2143 18.8524 17.2143 18.375V6.5625V6.0625H16.7143H1.28571Z" stroke="#ffffff"/>
                                                    </svg>
                                                    <svg class="short-list__buttons-img short-list__buttons-img_check" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 6L9.5 16L1 1" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                                                    </svg>
                                                </button>
                                            </li>
                                            <li class="short-list__buttons-item">
                                                <button class="short-list__buttons-button short-list__buttons-button_favourite" aria-label="Добавить в избранное">
                                                    <svg class="short-list__buttons-img short-list__buttons-img_favourite"  width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.4163 1.96511L10.417 1.9658C10.4931 2.03683 10.567 2.1095 10.6375 2.18382L11.0019 2.56785L11.3645 2.18214C11.4331 2.10913 11.5045 2.03891 11.5785 1.97165L11.5786 1.97169L11.5843 1.96635C14.4324 -0.704977 19.252 0.458591 20.9182 3.99643C21.7382 5.7374 21.8075 8.10437 20.3658 10.9331C18.9447 13.7214 16.0569 16.9482 11.0002 20.3961C5.94343 16.9486 3.0556 13.7221 1.63439 10.934C0.192618 8.10557 0.261741 5.73877 1.08163 3.99781C2.74774 0.459952 7.56752 -0.704349 10.4163 1.96511Z" stroke="#11255F" stroke-width="1.5"/>
                                                    </svg>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <button class="tabs__swiper-arrow tabs__swiper-arrow_next tabs__swiper-arrow_next-sale" aria-label="Следующий слайд"></button>
                    <button class="tabs__swiper-arrow tabs__swiper-arrow_prev tabs__swiper-arrow_prev-sale" aria-label="Предыдущий слайд"></button>
                </li>
            </ul>
        </section>

        <?php 
            @include 'blocks/banner.php';
        ?>

        <section class="show section">
            <h2 class="section-title">Каталог Салют73</h2>
            <p class="show__descr">Кроме холодных фонтанов и пиротехнических вертушек, есть ещё немало эффектных вариантов инсталляций для наземного шоу: это <span class="show__bold">горящие буквы, цифры и огненное сердце</span>, которое молодожёны зажигают самостоятельно с помощью специального факела. Это трогательная и романтическая церемония, символизирующая неугасающий огонь любви.</p>
        </section>

        <?php 
            @include 'blocks/stages.php';
            @include 'blocks/subscribe.php';
        ?>
    </main>

    <?php 
        @include 'blocks/footer.php';
    ?>

    <!-- https://swiperjs.com/ -->
    <script src="js/pages/modalOutput.js"></script>
    <script src="js/modules/inputMask.js"></script>
    <script src="js/libs/swiper.min.js"></script>
    <!-- фотогалерея в модальном окне -->
    <script src="js/libs/fslightbox.js"></script>
    <script src="js/libs/imask.js"></script>
    <script src="js/pages/catalogue.js"></script>
</body>
</html>