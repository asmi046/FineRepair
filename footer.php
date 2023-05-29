<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer class="footer">
    <div class="footer__wrap wrap flex flex--aic flex--jcsb">
        <div class="footer__logotype">
            <a href="/" class="footerLogotype flex flex--aic flex--jcs">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logotype-white.png" alt="" class="footerLogotype__image">
            </a>
        </div>
        <div class="footer__nav">
            <div class="footerNav flex flex--aic flex--jcs">
                <div class="footerNav__item">
                    <a href="/prices/" class="footerNav__link ">Цены</a>
                </div>
                <div class="footerNav__item">
                    <a href="/sales/" class="footerNav__link ">Акции</a>
                </div>
                <div class="footerNav__item">
                    <a href="/about/" class="footerNav__link ">О компании</a>
                </div>
                <!-- <div class="footerNav__item">
                    <a href="/services/" class="footerNav__link ">Услуги</a>
                </div> -->
                <div class="footerNav__item">
                    <a href="/reviews/" class="footerNav__link ">Отзывы</a>
                </div>
                <div class="footerNav__item">
                    <a href="/contacts/" class="footerNav__link ">Контакты</a>
                </div>
            </div>
        </div>
        
        <!-- <div class="footer__covid">
            <div class="footerCovid">
                <div class="footerCovid__icon"></div>
                <div class="footerCovid__text">
                    <div class="footerCovid__close"><svg height="311pt" viewBox="0 0 311 311.07733" width="311pt" xmlns="http://www.w3.org/2000/svg"><path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"/><path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"/></svg></div>
                    <p>Мы работаем в обычном режиме. Мастера выезжают на дом без выходных и праздников.</p>
                    <p><b>Каждый день</b> мы проверяем у мастеров температуру и следим за их самочувствием.</p>
                    <p>Наша задача сделать так, чтобы <b>вы были спокойны</b> не только за свою технику, но и <b>за свое здоровье</b>.</p>
                </div>
            </div>
        </div> -->

        <div class="footer__phone">
            <div class="footerPhone">
                <a href="tel:<?php the_field('telefon', 'options'); ?>" class="footerPhone__link"><?php the_field('telefon', 'options'); ?></a>
            </div>
        </div>
    </div>

    <div class="footer__wrap footer__wrap__dop wrap flex flex--aic flex--jcsb">
        <div class="foot_3_col">
            <div>
                <h3>Мы ремонтируем</h3>
                <a href="<?php echo get_the_permalink(19)?>">Стиральные машины</a><br>
                <a href="<?php echo get_the_permalink(22)?>">Посудомоечные машины</a><br>
                <a href="<?php echo get_the_permalink(21)?>">Сушильные машины</a><br>
                <a href="<?php echo get_the_permalink(663)?>">Холодильники</a><br>
                <a href="<?php echo get_the_permalink(665)?>">Духовые шкафы</a><br>
                <a href="<?php echo get_the_permalink(667)?>">Варочные панели</a><br>
            </div>
            <div>
                <h3>Способы оплаты</h3>   
                <div class="pay_logo">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/mir.png" alt=""></div>    
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/maestro.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/visa.png" alt=""></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/mastercard.png" alt=""></div>
                </div>
            </div>
            <div>
                <span class="map_pin">Работаем без выходных с 9:00 до 22:00</span>
                <span class="time_work">Ходынская улица, 3с4</span>
            </div>
        </div>
        <div class="pay_m_wrap">
            
        </div>
        
    </div>

    <div class="footer__info">
        <div class="wrap">
            Обращаем ваше внимание на то, что данный сайт носит исключительно информационный характер и не является публичной офертой, определяемой положениями Статьи 437 ГК РФ.
            <br><?php the_field('yur_liczo', 'options'); ?> ОГРН <?php the_field('ogrn', 'options'); ?> ИНН/КПП  <?php the_field('inn', 'options'); ?>/<?php the_field('kpp', 'options'); ?>
            <br>
            <a href="<?php echo get_the_permalink(659)?>">Карта сайта</a><br>
        </div>
    </div>
</footer>

		<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Slick -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- Slick -->

<script src='<?php echo get_template_directory_uri(); ?>/js/js-anti-spam.js' id='js-anti-spam'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/uni_sender.js' id='uni_sendr'></script>

<script src='<?php echo get_template_directory_uri(); ?>/js/navigation.js' id='goodremont-navigation-js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/app.js' id='goodremont-app-js'></script>

	</body>
</html>
