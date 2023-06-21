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


    <div class="footer__wrap footer__wrap__dop wrap flex flex--aic flex--jcsb">
        <div class="foot_3_col">
            <div>
                <div class="footer__logotype">
                    <a href="/" class="footerLogotype flex flex--aic flex--jcs">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logotype-white.png" alt="" class="footerLogotype__image">
                    </a>
                </div>
                <p class="subtext_footer">Качественный и срочный ремонт бытовой техники в Москве и Московской области</p>

                <figure class="pm">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/moscow-white.png" data-src="https://computer-master.org/themes/starterkit/assets/resources/images/moscow-white.png" alt="Логотип компании" title="Логотип компании" data-uk-img="">
                    <span>При поддержке <br/>Правительства <br/>Москвы</span>
                </figure>
            </div>

            <div>
                <h3>Клиентам</h3>
                <a href="/prices/">Цены</a><br>
                <a href="/sales/" >Акции</a><br>
                <a href="/about/" >О компании</a><br>
                <a href="/reviews/" >Отзывы</a><br>
                <a href="/contacts/">Контакты</a><br>
            </div>

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

                <div class="footer__phone">
                    <div class="footerPhone">
                        <a href="tel:<?php the_field('telefon', 'options'); ?>" class="footerPhone__link"><?php the_field('telefon', 'options'); ?></a>
                    </div>
                </div>

                <span class="time_work">Работаем без выходных с 9:00 до 22:00</span><br/>
                <span class="map_pin">Ходынская улица, 3с4</span>
            </div>
        </div>
        <div class="pay_m_wrap">
            <h3>Способы оплаты</h3>   
            <div class="pay_logo">
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/mir.png" alt=""></div>    
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/maestro.png" alt=""></div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/visa.png" alt=""></div>
                <div><img src="<?php echo get_template_directory_uri(); ?>/images/paym/mastercard.png" alt=""></div>
            </div>
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

<?php
$post_thumbnail_id = get_post_thumbnail_id($post);
echo "<script>console.log('post_thumbnail_id: {$post_thumbnail_id}' );</script>";
?>
	
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
