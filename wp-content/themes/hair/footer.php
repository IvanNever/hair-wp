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