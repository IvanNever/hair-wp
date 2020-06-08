<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Анна Неверовская</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;300;500;700;900&family=Marmelad&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="<?php echo bloginfo('template_url');?>/assets/img/favicon.ico">
        <?php
            wp_head();
        ?>
    </head>
    <body>
        <header class="header" id="header">
            <div class="header__container">
                <nav class="header__nav">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/logo.png" alt="Logo" class="header__logo">
                    <ul class="header__nav-list">
                        <li class="header__nav-item"><a href="#about" class="header__nav-link">Про меня</a></li>
                        <li class="header__nav-item"><a href="#price" class="header__nav-link">Стоимость</a></li>
                        <li class="header__nav-item"><a href="#gallery" class="header__nav-link">Галерея</a></li>
                        <li class="header__nav-item"><a href="#footer" class="header__nav-link">Контакты</a></li>
                    </ul>
                </nav>
                <h1 class="header__title">Анна Неверовская</h1>
                <h2 class="header__subtitle">Универсальные парикмахерские услуги в Киеве</h2>
                <a href="#feedback" class="btn header__btn">Записаться</a>
            </div>
        </header>
        <section class="about" id="about">
            <h2 class="about__heading heading">Про меня</h2>
            <div class="about__img wow">
                <div class="about__img-container">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/about-1.jpg" alt="about 1" class="about__img-1">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/about-2.jpg" alt="about 2" class="about__img-2">
                    <img src="<?php echo bloginfo('template_url');?>/assets/img/about-3.jpg" alt="about 3" class="about__img-3">
                </div>
            </div>
            <div class="about__descr wow">
                <span>Некоторый текст описывающий мои профессиональные навыки включающий несколько абзацевНекоторый текст описывающий мои профессиональные навыки включающий несколько абзацев навыки включающий несколько абзацев</span>
                <span>Некоторый текст описывающий мои профессиональные навыки включающий несколько абзацевНекоторый текст описывающий мои профессиональные навыки включающий несколько абзацев</span>
                <span>Некоторый текст описывающий мои профессиональные навыки включающий несколько абзацевНекоторый текст описывающий мои профессиональные навыки </span>
            </div>
        </section>
        <section class="skills" id="skills">
            <div class="skills__container">
                <div class="skills__item wow">
                    <svg class="skills__icon">
                        <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-back-in-time"></use>
                    </svg>
                    <div class="skills__descr">Некоторый текст описывающий мои профессиональные навыки включающий </div>
                </div>
                <div class="skills__item wow">
                    <svg class="skills__icon">
                        <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-emoji-happy"></use>
                    </svg>
                    <div class="skills__descr">Некоторый текст описывающий мои профессиональные навыки включающий несколько абзацевНекоторый</div>
                </div>
                <div class="skills__item wow">
                    <svg class="skills__icon">
                        <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-gauge"></use>
                    </svg>
                    <div class="skills__descr">Некоторый текст описывающий мои профессиональные навыки включающий </div>
                </div>
                <div class="skills__item wow">
                    <svg class="skills__icon">
                        <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-megaphone"></use>
                    </svg>
                    <div class="skills__descr">Некоторый текст описывающий мои профессиональные навыки включающий  </div>
                </div>
                <div class="skills__item wow">
                    <svg class="skills__icon">
                        <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-palette"></use>
                    </svg>
                    <div class="skills__descr">Некоторый текст описывающий мои професси </div>
                </div>
                <div class="skills__item wow">
                    <svg class="skills__icon">
                        <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-scissors"></use>
                    </svg>
                    <div class="skills__descr">Некоторый текст описывающий мои профессиональные навык</div>
                </div>
            </div>
        </section>
        <section class="price" id="price">
            <h2 class="price__heading heading">Стоимость услуг</h2>
            <div class="price__container">
                <div class="price__card wow">
                    <div class="price__card__side price__card__side_front price__card__side_front-1">
                        <div class="price__img price__img_1">&nbsp;</div>
                        <h3 class="price__subheader">Женская прическа</h3>

                        <div class="price__bottom price__bottom_1">
                            <div class="price__more">Подробнее...</div>
                        </div>
                    </div>
                    <div class="price__card__side price__card__side_back price__card__side_back-1">
                        <ul class="price__list">
                            <li class="price__item">Женская стрижка <span>300 грн.</span></li>
                            <li class="price__item">Простая укладка  <span>200 грн.</span></li>
                            <li class="price__item">Модельная укладка  <span>500 грн.</span></li>
                            <li class="price__item">Простое окрашивание  <span>800 грн.</span></li>
                            <li class="price__item">Сложное окрашивание  <span>1500 грн.</span></li>
                        </ul>
                        <a href="#feedback" class="btn btn_price">Записаться</a>
                    </div>
                </div>
                <div class="price__card wow">
                    <div class="price__card__side price__card__side_front price__card__side_front-2">
                        <div class="price__img price__img_2">&nbsp;</div>                        <h3 class="price__subheader">Детская прическа</h3>
                        <div class="price__bottom price__bottom_2">
                            <div class="price__more">Подробнее...</div>
                        </div>
                    </div>
                    <div class="price__card__side price__card__side_back price__card__side_back-2">
                        <ul class="price__list">
                            <li class="price__item">Детская стрижка <span>300 грн.</span></li>
                            <li class="price__item">Простая укладка  <span>200 грн.</span></li>
                            <li class="price__item">Модельная укладка  <span>500 грн.</span></li>
                            <li class="price__item">Простое окрашивание  <span>800 грн.</span></li>
                            <li class="price__item">Сложное окрашивание  <span>1500 грн.</span></li>
                        </ul>
                        <a href="#feedback" class="btn btn_price">Записаться</a>
                    </div>
                </div>
                <div class="price__card wow">
                    <div class="price__card__side price__card__side_front price__card__side_front-3">
                        <div class="price__img price__img_3">&nbsp;</div>
                        <h3 class="price__subheader">Мужская прическа</h3>
                        <div class="price__bottom price__bottom_3">
                            <div class="price__more">Подробнее...</div>
                        </div>
                    </div>
                    <div class="price__card__side price__card__side_back price__card__side_back-3">
                        <ul class="price__list">
                            <li class="price__item">Мужская стрижка <span>300 грн.</span></li>
                            <li class="price__item">Простая укладка  <span>200 грн.</span></li>
                            <li class="price__item">Модельная укладка  <span>500 грн.</span></li>
                            <li class="price__item">Простое окрашивание  <span>800 грн.</span></li>
                            <li class="price__item">Сложное окрашивание  <span>1500 грн.</span></li>
                        </ul>
                        <a href="#feedback" class="btn btn_price">Записаться</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="feedback" id="feedback">
            <h2 class="feedback__header wow">Записаться на красивую прическу?</h2>
            <form action="mail.php" method="POST" class="form feedback__form wow">
                <div class="form__group">
                    <input class="form__input" name="name" id="name" type="text" placeholder="Ваше имя" required>
                    <label for="name" class="form__label">Ваше имя</label>
                </div>
                <div class="form__group">
                    <input class="form__input" name="phone" id="phone" type="text" placeholder="Ваш телефон" required>
                    <label for="phone" class="form__label">Ваш телефон</label>
                </div>
                <div class="form__group">
                    <input class="form__input" name="visit" id="visit" type="text" placeholder="День визита" required>
                    <label for="visit" class="form__label">День визита</label>
                </div>
                <div class="form__group">
                    <div class="form__radio-group">
                        <input type="radio" class="form__radio-input" id="lady" name="type" value="lady">
                        <label for="lady" class="form__radio-label">
                            <span class="form__radio-button"></span>
                            Женская прическа
                        </label>
                    </div>
                    <div class="form__radio-group">
                        <input type="radio" class="form__radio-input" id="man" name="type" value="man">
                        <label for="man" class="form__radio-label">
                            <span class="form__radio-button"></span>
                            Мужская прическа
                        </label>
                    </div>
                    <div class="form__radio-group">
                        <input type="radio" class="form__radio-input" id="child" name="type" value="child">
                        <label for="child" class="form__radio-label">
                            <span class="form__radio-button"></span>
                            Детская прическа
                        </label>
                    </div>
                </div>
                <div class="form__group">
                    <button class="btn feedback__btn">Записаться</button>
                </div>

            </form>
        </section>
        <section class="gallery" id="gallery">
            <h2 class="heading gallery__heading">
                Мои работы
            </h2>
            <div class="gallery__container">
                <div class="gallery__slider">
                    <div><img src="<?php echo bloginfo('template_url');?>/assets/img/about-1.jpg" alt="Пример стрижки 1" class="gallery__photo"></div>
                    <div><img src="<?php echo bloginfo('template_url');?>/assets/img/about-2.jpg" alt="Пример стрижки 2" class="gallery__photo"></div>
                    <div><img src="<?php echo bloginfo('template_url');?>/assets/img/about-3.jpg" alt="Пример стрижки 3" class="gallery__photo"></div>
                    <div><img src="<?php echo bloginfo('template_url');?>/assets/img/price-1.jpg" alt="Пример стрижки 4" class="gallery__photo"></div>
                    <div><img src="<?php echo bloginfo('template_url');?>/assets/img/price-2.jpg" alt="Пример стрижки 5" class="gallery__photo"></div>
                    <div><img src="<?php echo bloginfo('template_url');?>/assets/img/price-3.jpg" alt="Пример стрижки 6" class="gallery__photo"></div>
                </div>
            </div>
        </section>
        <footer class="footer" id="footer">
            <h2 class="footer__header">Контакты:</h2>
            <h3 class="footer__subheader">Анна Неверовская</h3>
            <address class="footer__subheader footer__address">Киев, ул. Закревского 9</address>
            <a href="tel:+380632244880" class="footer__phone">(063) 224 - 48 - 80</a>
            <div class="footer__socials">
                <svg class="footer__icon">
                    <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-facebook"></use>
                </svg>
                <svg class="footer__icon">
                    <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-instagram"></use>
                </svg>
                <svg class="footer__icon">
                    <use xlink:href="<?php echo bloginfo('template_url');?>/assets/img/sprite.svg#icon-whatsapp"></use>
                </svg>
            </div>
            <div class="footer__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4790.869122110811!2d30.588325139160517!3d50.499295837924635!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbbd8461c76f727ea!2sBeauty%20salon%20%22Sirius%22!5e0!3m2!1sru!2sua!4v1590320831939!5m2!1sru!2sua"></iframe>
            </div>
            <div class="footer__copyright">
                Права на сайт принадлежат Неверовской Анне Сергеевне. <br> Любое использование текста, медиафайлов или программных компонентов сайта запрещено.
                <a href="https://www.web-kit.com.ua/" class="footer__dev">Дизайн и разработка сайта - WEB KIT FACTORY</a>
            </div>
        </footer>

        <div class="popup popup-success" id="popup-success">
            <div class="popup__content">
                <h3 class="heading popup__header">Спасибо за обращение!</h3>
                <div class="popup__text">
                    Я перезвоню вам в ближайшее время для согласования времени визита <span>:)</span>
                    <a href="#" class="popup__close">&times;</a>
                </div>
            </div>
        </div>

        <div class="popup popup-error" id="popup-error">
            <div class="popup__content">
                <h3 class="heading popup__header">Произошла ошибка!</h3>
                <div class="popup__text">
                    Что-то пошло не так и ваша заявка не была принята <span>:(</span><br>
                    Попробуйте еще раз или воспользуйтесь другими способами записи!
                    <a href="#" class="popup__close">&times;</a>
                </div>
            </div>
        </div>

        <a href="#header" class="page-up scroll"><img src="<?php echo bloginfo('template_url');?>/assets/img/chevron-up-solid.svg" alt="page-up"></a>


        <!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/script.js"></script> -->

        <?php
            wp_footer();
        ?>
    </body>
</html>