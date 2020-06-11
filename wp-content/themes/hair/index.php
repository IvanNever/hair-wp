<?php
    get_header();
?>

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

<?php
    get_footer();
?>