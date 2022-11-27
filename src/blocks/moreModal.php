<!-- <div class="modal more__modal">
    <div class="modal__container">
        <button class="modal__close" aria-label="Закрыть модальное окно">&times;</button>
        <p class="modal__dev">Интернет-магазин находится в стадии разработки</p>
        <div class="modal__info">
            <span class="modal__info-text">Вы можете заказать товар:</span>
            <ul class="modal__list" itemscope itemtype="https://schema.org/Organization">
                <li class="modal__item">
                    <p class="modal__item-text">1. По телефону: 
                        <a href="tel:89510962111" class="modal__item-link" itemprop="telephone">+7 (951) 096-21-11</a>
                    </p>
                </li>
                <li class="modal__item">
                    <p class="modal__item-text">2. По почте: 
                        <a href="mailto:salyt73@mail.ru​" class="modal__item-link" itemprop="email">salyt73@mail.ru​</a>
                    </p>
                </li>
                <li class="modal__item">
                    <p class="modal__item-text">3. По адресам:</p>
                    <ul class="modal__contacts">
                        <li class="modal__contacts-item">
                            <address class="modal__contacts-address">
                                <span class="modal__contacts-text" itemprop="addressLocality">г. Ульяновск</span> 
                                <span class="modal__contacts-text" itemprop="streetAddress">пр-т. Врача Сурова 2а</span>
                            </address>
                        </li>
                        <li class="modal__contacts-item">
                            <address class="modal__contacts-address">
                                <span class="modal__contacts-text" itemprop="addressLocality">г. Ульяновск</span> 
                                <span class="modal__contacts-text" itemprop="streetAddress">ул. Промышленная 59б</span>
                            </address>
                        </li>
                        <li class="modal__contacts-item">
                            <address class="modal__contacts-address">
                                <span class="modal__contacts-text" itemprop="addressLocality">г. Ульяновск</span> 
                                <span class="modal__contacts-text" itemprop="streetAddress">пр-т. Туполева 15</span>
                            </address>
                        </li>
                        <li class="modal__contacts-item">
                            <address class="modal__contacts-address">
                                <span class="modal__contacts-text" itemprop="addressLocality">г. Чердаклы</span> 
                                <span class="modal__contacts-text" itemprop="streetAddress">ул. Советская 34</span>
                            </address>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div> -->

<!-- <div class="modal form__modal">
            <div class="modal__container">
                <button class="modal__close" aria-label="Закрыть модальное окно">&times;</button>
                <form action="#" class="modal__form">
                    <div class="inputOutput" id="inputOutput">
                        <img class="inputOutput__img" src="img/blocks/header/logo.svg">
                        <p class="inputOutput__title">Ваша заявка</p>
                        <div class="inputOutput__wrapper">
                            <span>Дата и время:</span> <span class="dateOutput"></span>
                        </div>
                        <div class="inputOutput__wrapper inputOutput__wrapper--checkbox">
                            <p>Выбранные элементы шоу:</p>
                            <div class="checkboxOutput checkboxOutput--smokE">Тяжелый дым</div>
                            <div class="checkboxOutput checkboxOutput--firE">Горящие сердца</div>
                            <div class="checkboxOutput checkboxOutput--bengaL">Бенгальские огни</div>
                            <div class="checkboxOutput checkboxOutput--salyT">Салют</div>
                            <div class="checkboxOutput checkboxOutput--pyro">Пиро-шоу</div>
                            <div class="checkboxOutput checkboxOutput--colored">Цветной дым</div>
                        </div>

                        <div class="inputOutput__wrapper">
                            <span>Ваше имя:&nbsp;</span>
                            <span class="modal__user-namefield"></span>
                        </div>

                        <div class="inputOutput__wrapper">
                            <span>Ваш телефон:&nbsp;</span>
                            <span class="modal__user-phonefield"></span>
                        </div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper form__swiper">
                            <ul class="swiper-wrapper">
                                <li class="swiper-slide swiper-no-swiping">
                                    <span class="modal__text">Укажите дату и время Вашего мероприятия:</span>
                                    
                                    <input 
                                        type="datetime-local" 
                                        id="datetime-local"
                                        class="modal__date" 
                                        name="user-date" 
                                        data-date
                                        required
                                        placeholder="Введите дату"
                                        onchange="dateOutput()">
                                    <div class="modal__footer">
                                        <span class="modal__step">1 шаг из 3</span>
                                        <button class="swiper-button-next swiper-button-next_1" data-animate-fill>
                                            <span>Далее</span>
                                        </button>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-no-swiping">
                                    <span class="modal__text">Выберите элементы шоу:</span>
                                    <ul class="modal__list">
                                        <li class="modal__item modal__item1">
                                            <picture class="modal__item-picture">
                                                <source srcset="imgwebp/blocks/modal/radiobuttons/tyazhelii-dim.webp" type="image/webp">
                                                <img src="#" data-src="img/blocks/modal/radiobuttons/tyazhelii-dim.jpg" alt="Тяжелый дым" class="modal__item-img">
                                            </picture>
                                            <div class="modal__item-wrapper">
                                                <input 
                                                    type="checkbox" 
                                                    class="modal__checkbox-real sr-only" 
                                                    name="user-show[0]"
                                                    value="Тяжелый дым"
                                                    id="smokE"
                                                    >
                                                <span class="modal__checkbox-fake"></span>
                                                <span class="modal__item-title">Тяжелый дым</span>
                                            
                                            </div>
                                        </li>
                                        <li class="modal__item modal__item2">
                                            <picture class="modal__item-picture">
                                                <source srcset="imgwebp/blocks/modal/radiobuttons/goryatschie-serdsta.webp" type="image/webp">
                                                <img src="#" data-src="img/blocks/modal/radiobuttons/goryatschie-serdsta.jpg" alt="Горящие сердца" class="modal__item-img">
                                            </picture>
                                            <div class="modal__item-wrapper">
                                                <input 
                                                    type="checkbox" 
                                                    class="modal__checkbox-real sr-only" 
                                                    name="user-show[1]"
                                                    value="Горящие сердца"
                                                    id="firE"
                                                  
                                                    >
                                                <span class="modal__checkbox-fake"></span>
                                                <span class="modal__item-title">Горящие сердца</span>
                                            </div>
                                        </li>
                                        <li class="modal__item modal__item3">
                                            <picture class="modal__item-picture">
                                                <source srcset="imgwebp/blocks/modal/radiobuttons/bengalskie-ogni.webp" type="image/webp">
                                                <img src="#" data-src="img/blocks/modal/radiobuttons/bengalskie-ogni.jpg" alt="Бенгальские огни" class="modal__item-img">
                                            </picture>
                                            <div class="modal__item-wrapper">
                                                <input 
                                                    type="checkbox" 
                                                    class="modal__checkbox-real sr-only" 
                                                    name="user-show[2]"
                                                    value="Бенгальские огни"
                                                    id="bengaL"
                                                    >
                                                <span class="modal__checkbox-fake"></span>
                                                <span class="modal__item-title">Бенгальские огни</span>
                                            </div>
                                        </li>
                                        <li class="modal__item modal__item4">
                                            <picture class="modal__item-picture">
                                                <source srcset="imgwebp/blocks/modal/radiobuttons/salut.webp" type="image/webp">
                                                <img src="#" data-src="img/blocks/modal/radiobuttons/salut.jpg" alt="Салют" class="modal__item-img">
                                            </picture>
                                            <div class="modal__item-wrapper">
                                                <input 
                                                    type="checkbox" 
                                                    class="modal__checkbox-real sr-only" 
                                                    name="user-show[3]"
                                                    value="Салют"
                                                    id="salyT"
                                                    >
                                                <span class="modal__checkbox-fake"></span>
                                                <span class="modal__item-title">Салют</span>
                                            </div>
                                        </li>
                                        <li class="modal__item modal__item5">
                                            <picture class="modal__item-picture">
                                                <source srcset="imgwebp/blocks/modal/radiobuttons/piro-shou.webp" type="image/webp">
                                                <img src="#" data-src="img/blocks/modal/radiobuttons/piro-shou.jpg" alt="Пиро-шоу" class="modal__item-img">
                                            </picture>
                                            <div class="modal__item-wrapper">
                                                <input 
                                                    type="checkbox" 
                                                    class="modal__checkbox-real sr-only" 
                                                    name="user-show[4]"
                                                    value="Пиро-шоу"
                                                    id="pyro"
                                                    >
                                                <span class="modal__checkbox-fake"></span>
                                                <span class="modal__item-title">Пиро-шоу</span>
                                            </div>
                                        </li>
                                        <li class="modal__item modal__item6">
                                            <picture class="modal__item-picture">
                                                <source srcset="imgwebp/blocks/modal/radiobuttons/tsvetnoi-dim.webp" type="image/webp">
                                                <img src="#" data-src="img/blocks/modal/radiobuttons/tsvetnoi-dim.jpg" alt="Цветной дым" class="modal__item-img">
                                            </picture>
                                            <div class="modal__item-wrapper">
                                                <input 
                                                    type="checkbox" 
                                                    class="modal__checkbox-real sr-only" 
                                                    name="user-show[5]"
                                                    value="Цветной дым"
                                                    id="colored"
                                                    >
                                                <span class="modal__checkbox-fake"></span>
                                                <span class="modal__item-title">Цветной дым</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="modal__footer">
                                        <button class="swiper-button-back swiper-button-back_enabled" data-animate-fill>
                                            <span>Назад</span>
                                        </button>
                                        <span class="modal__step">2 шаг из 3</span>
                                        <button class="swiper-button-next swiper-button-next_2" data-animate-fill>
                                            <span>Далее</span>
                                        </button>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-no-swiping">
                                    <span class="modal__text">Как с Вами связаться?</span>
                                    <input 
                                        class="modal__form-input modal__user-name" 
                                        type="text"
                                        name="user-name"
                                        minlength="2"
                                        maxlength="50"
                                        placeholder="Имя"
                                        autocomplete="off"
                                        required
                                        onchange="modalInputValue();">
                                    <input 
                                        class="modal__form-input modal__user-phone" 
                                        type="tel"
                                        style="margin-bottom: 40px;"
                                        name="user-phone"
                                        placeholder="Телефон"
                                        autocomplete="off"
                                        data-phone
                                        required
                                        onchange="modalInputValue();">
                                    <span class="modal__text">Вы можете связаться с нами:</span>
                                    <div class="modal__contact-info">
                                        <div class="modal__contact-info-left">
                                            <p class="modal__contact-info-tel">По телефону:</p>
                                            <a class="header__list-link modal__contact-info-tel modal__contact-info-tel--mb" href="tel:+79510962111">+7 (951) 096-21-11</a>

                                            <p class="modal__contact-info-mail">По почте:</p>
                                            <a class="header__list-link modal__contact-info-mail" href="mailto:salyt73@yandex.ru​">salyt73@yandex.ru​</a>
                                        </div>
                                        <div class="modal__contact-info-right">
                                            <p class="modal__contact-info-tel modal__contact-info-tel--mb">По адресам:</p>
                                            <a class="header__list-link modal__contact-info-address" href="contacts.php"><svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M9.50001 0C4.25331 0 0 4.21919 0 9.42383C0 11.1644 0.343441 12.9621 1.32901 14.2578L9.50001 25L17.671 14.2578C18.5662 13.0809 19 11.0004 19 9.42383C19 4.21919 14.7467 0 9.50001 0ZM9.50001 5.45806C11.7076 5.45806 13.4978 7.23392 13.4978 9.42381C13.4978 11.6138 11.7076 13.3896 9.50001 13.3896C7.29239 13.3896 5.5022 11.6138 5.5022 9.42383C5.5022 7.23392 7.29239 5.45806 9.50001 5.45806Z" fill="white"/>
</svg>
г. Ульяновск, Проспект Врача Сурова 2а</a><br>
                                            <a class="header__list-link modal__contact-info-address" href="contacts.php"><svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M9.50001 0C4.25331 0 0 4.21919 0 9.42383C0 11.1644 0.343441 12.9621 1.32901 14.2578L9.50001 25L17.671 14.2578C18.5662 13.0809 19 11.0004 19 9.42383C19 4.21919 14.7467 0 9.50001 0ZM9.50001 5.45806C11.7076 5.45806 13.4978 7.23392 13.4978 9.42381C13.4978 11.6138 11.7076 13.3896 9.50001 13.3896C7.29239 13.3896 5.5022 11.6138 5.5022 9.42383C5.5022 7.23392 7.29239 5.45806 9.50001 5.45806Z" fill="white"/>
</svg>
г. Ульяновск, ул. Промышленная 59</a><br>
                                            <a class="header__list-link modal__contact-info-address" href="contacts.php"><svg width="19" height="25" viewBox="0 0 19 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.3" d="M9.50001 0C4.25331 0 0 4.21919 0 9.42383C0 11.1644 0.343441 12.9621 1.32901 14.2578L9.50001 25L17.671 14.2578C18.5662 13.0809 19 11.0004 19 9.42383C19 4.21919 14.7467 0 9.50001 0ZM9.50001 5.45806C11.7076 5.45806 13.4978 7.23392 13.4978 9.42381C13.4978 11.6138 11.7076 13.3896 9.50001 13.3896C7.29239 13.3896 5.5022 11.6138 5.5022 9.42383C5.5022 7.23392 7.29239 5.45806 9.50001 5.45806Z" fill="white"/>
</svg>
г. Чердаклы, ул. Советская 34</a><br>
                                        </div>
                                    </div>
                                    <div class="modal__footer">
                                        <button class="swiper-button-back swiper-button-back_enabled" data-animate-fill>
                                            <span>Назад</span>
                                        </button>
                                        <span class="modal__step">3 шаг из 3</span>
                                        <button class="modal__submit" type="submit" data-animate-fill>
                                            <span>Завершить</span>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input 
                        type="hidden" 
                        name="recaptcha_response" 
                        value=""
                        class="form-token">
                </form>

                <span class="modal__message modal__message_success">Спасибо, Ваша заявка успешно отправлена!</span>
                <span class="modal__message modal__message_error">Произошла ошибка! Пожалуйста, попробуйте позже.</span>
            </div>
        </div> -->