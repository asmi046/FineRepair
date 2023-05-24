<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	
	<meta name="yandex-verification" content="123c604832f26650" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo get_template_directory_uri(); ?>/style.min.css'
          media='all'/>
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo get_template_directory_uri(); ?>/style.css'
          media='all'/>
	
	<script>
	var abc = new XMLHttpRequest();
	var microtime = Date.now();
	var abcbody = "t="+microtime+"&w="+screen.width+"&h="+ screen.height+"&cw="+document.documentElement.clientWidth+"&ch="+document.documentElement.clientHeight;
	abc.open("POST", "/antibot8/8.php", true);
	abc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	abc.send(abcbody);
	</script>
	
	<script defer src="https://af.click.ru/af.js?id=13908"></script>

    <script type="text/javascript">
        var __cs = __cs || [];
        __cs.push(["setCsAccount", "axGWqD749yEKbp7ik5G9eBWZaPtrQvZ8"]);
    </script>
    <script type="text/javascript" async src="https://app.uiscom.ru/static/cs.min.js"></script>
	
	<script>var queryForm=function(e){var t=!(!e||!e.reset)&&e.reset,n=window.location.toString().split("?");if(n.length>1){var o=n[1].split("&");for(s in o){var r=o[s].split("=");(t||null===sessionStorage.getItem(r[0]))&&sessionStorage.setItem(r[0],decodeURIComponent(r[1]))}}};queryForm();</script>

    <?php wp_head(); ?>
	
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(87721291, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/87721291" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script type="text/javascript">
        setTimeout('ym(87721291, "reachGoal", "time_80")', 80000);
    </script>
    <script type="text/javascript">
        eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('4 7=1O;4 1d=1R;4 Y=1I;4 y=1Q;4 1e=1T;4 r=0;4 1n=26;4 n=0;4 1g=23;4 o=0;4 1k=24;4 x=0;4 1j=21;4 H=0;4 1h=1V;4 C=0;4 1f=1W;4 L=0;4 1m=1X;4 D=0;4 1p=1I;4 B=0;4 1q=1F;4 E=0;4 11=1G;4 X=0;4 1s=1y;4 V=0;4 1M=18;4 P=0;4 1A=17;4 O=0;4 1K=1a;4 N=0;4 15=1;4 I=0;4 1c=2;4 G=0;4 1t=3;4 w=0;4 1H=1;4 M=0;4 1J=2;4 p=0;4 1L=3;4 l=0;4 1z=1;4 m=0;4 1B=2;4 q=0;4 1C=3;4 v=0;4 16=1F;4 Q=0;4 14=1G;4 W=0;4 1o=1y;4 R=0;4 1r=18;4 U=0;4 1i=17;4 T=0;4 1l=1a;4 S=0;4 1v=5;4 u=0;4 1N=10;4 t=0;4 1D=20;4 s=0;4 1b=["Z","1u","12","19"];4 k=K.J();4 F=k+1d;4 a=0;4 f=0;4 g=0;4 d=0;4 h=0;4 b=0;4 c=0;4 d=0;1Z(j(){6(!z.25&&k<=F){k=K.J();a+=y;6(a>=1e&&r==0){8(7,"9","22");r=1}6(a>=1n&&n==0){8(7,"9","1P");n=1}6(a>=1g&&o==0){8(7,"9","1S");o=1}6(a>=1k&&x==0){8(7,"9","1Y");x=1}6(a>=1j&&H==0){8(7,"9","2t");H=1}6(a>=1h&&C==0){8(7,"9","2u");C=1}6(a>=1f&&L==0){8(7,"9","2s");L=1}6(a>=1m&&D==0){8(7,"9","2o");D=1}6(a>=1p&&B==0){8(7,"9","2p");B=1}}},y);z.13("2w",j(){1b.2x(j(e){z.13(e,j(){F=K.J()+Y;6(e==="Z"){f++;6(f>=15&&I==0){8(7,"9","2z");I=1}6(f>=1c&&G==0){8(7,"9","2n");G=1}6(f>=1t&&w==0){8(7,"9","2c");w=1}6(1E.1x.1w===\'2d\'){g++;6(g>=1H&&M==0){8(7,"9","2b");M=1}6(g>=1J&&p==0){8(7,"9","2a");p=1}6(g>=1L&&l==0){8(7,"9","29");l=1}}i 6(1E.1x.1w===\'A\'){d++;6(d>=1z&&m==0){8(7,"9","2f");m=1}6(d>=1B&&q==0){8(7,"9","2l");q=1}6(d>=1C&&v==0){8(7,"9","2j");v=1}}}i 6(e==="1u"){h++;6(h>=1v&&u==0){8(7,"9","2g");u=1}6(h>=1N&&t==0){8(7,"9","2h");t=1}6(h>=1D&&s==0){8(7,"9","2e");s=1}}i 6(e==="12"){b++;6(b>=1q&&E==0){8(7,"9","2v");E=1}6(b>=11&&X==0){8(7,"9","2B");X=1}6(b>=1s&&V==0){8(7,"9","2q");V=1}6(b>=1M&&P==0){8(7,"9","2i");P=1}6(b>=1A&&O==0){8(7,"9","2k");O=1}6(b>=1K&&N==0){8(7,"9","28");N=1}}i 6(e==="19"){c++;6(c>=16&&Q==0){8(7,"9","2y");Q=1}6(c>=14&&W==0){8(7,"9","2A");W=1}6(c>=1o&&R==0){8(7,"9","27");R=1}6(c>=1r&&U==0){8(7,"9","2r");U=1}6(c>=1i&&T==0){8(7,"9","2m");T=1}6(c>=1l&&S==0){8(7,"9","1U");S=1}}})})});',62,162,'||||var||if|YM_COUNTER|ym|reachGoal|totalTime|scrollCount|mouseMovementCount|linkClickCount||clickCount|buttonClickCount|keypressCount|else|function|startTime|buttonClickCountOffset3Reached|linkClickCountOffset1Reached|totalTimeOffset2Reached|totalTimeOffset3Reached|buttonClickCountOffset2Reached|linkClickCountOffset2Reached|totalTimeOffset1Reached|keypressCountOffset3Reached|keypressCountOffset2Reached|keypressCountOffset1Reached|linkClickCountOffset3Reached|clickCountOffset3Reached|totalTimeOffset4Reached|ONE_SECOND|document||totalTimeOffset9Reached|totalTimeOffset6Reached|totalTimeOffset8Reached|scrollCountOffset1Reached|endTime|clickCountOffset2Reached|totalTimeOffset5Reached|clickCountOffset1Reached|now|Date|totalTimeOffset7Reached|buttonClickCountOffset1Reached|scrollCountOffset6Reached|scrollCountOffset5Reached|scrollCountOffset4Reached|mouseMovementCountOffset1Reached|mouseMovementCountOffset3Reached|mouseMovementCountOffset6Reached|mouseMovementCountOffset5Reached|mouseMovementCountOffset4Reached|scrollCountOffset3Reached|mouseMovementCountOffset2Reached|scrollCountOffset2Reached|INTERVAL_WAIT|mouseup||scrollCountOffset2|scroll|addEventListener|mouseMovementCountOffset2|clickCountOffset1|mouseMovementCountOffset1|300|200|mousemove|500|events|clickCountOffset2|INITIAL_WAIT|totalTimeOffset1|totalTimeOffset7|totalTimeOffset3|totalTimeOffset6|mouseMovementCountOffset5|totalTimeOffset5|totalTimeOffset4|mouseMovementCountOffset6|totalTimeOffset8|totalTimeOffset2|mouseMovementCountOffset3|totalTimeOffset9|scrollCountOffset1|mouseMovementCountOffset4|scrollCountOffset3|clickCountOffset3|keydown|keypressCountOffset1|nodeName|target|100|linkClickCountOffset1|scrollCountOffset5|linkClickCountOffset2|linkClickCountOffset3|keypressCountOffset3|event|50|80|buttonClickCountOffset1|120000|buttonClickCountOffset2|scrollCountOffset6|buttonClickCountOffset3|scrollCountOffset4|keypressCountOffset2|87721291|time_offset_2|1000|3000|time_offset_3|10000|mouse_movement_6|50000|60000|80000|time_offset_4|setInterval||40000|time_offset_1|20000|30000|hidden|15000|mouse_movement_3|scroll_count_6|button_click_count_3|button_click_count_2|button_click_count_1|click_count_3|BUTTON|keypress_count_3|link_click_count_1|keypress_count_1|keypress_count_2|scroll_count_4|link_click_count_3|scroll_count_5|link_click_count_2|mouse_movement_5|click_count_2|time_offset_8|time_offset_9|scroll_count_3|mouse_movement_4|time_offset_7|time_offset_5|time_offset_6|scroll_count_1|DOMContentLoaded|forEach|mouse_movement_1|click_count_1|mouse_movement_2|scroll_count_2'.split('|'),0,{}))
    </script>

    <meta id="publicIP" name="publicIP" content="">
    <meta id="publicIP_region" name="publicIP_region" content="">
    <meta id="publicIP_country_code" name="publicIP_country_code" content="">
    <meta id="publicIP_network" name="publicIP_network" content="">
    <meta id="publicIP_asn" name="publicIP_network" content="">	
	
</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>

<script>
    window.addEventListener('load', function () {
        document.querySelector('body').style.opacity = '1';
    });
</script>
<section class="screen screen--off">
    <script>
        document.addEventListener('keydown', function (event) {
            if (event.code == 'KeyQ') {
                document.querySelector(`.screen`).classList.toggle('screen--off');
            }
        });
    </script>
</section>
<section class="topLine">
    <div class="topLine__wrap wrap flex flex--aistr flex--jcsb">
        <div class="topLine__text">Ремонт бытовой техники</div>
        <div class="topLine__sale">
            <span>Скидка</span>
            <b>30%</b>
            <span>На заказ с 10.00 до 19.00</span>
        </div>
        <div class="topLine__worktime"><?php the_field('vremya_raboty', 'options'); ?> <span> </span> БЕЗ ВЫХОДНЫХ</div>
        <!-- <div class="topLine__worktime">Работаем без выходных</div> -->
    </div>
    <div class="topLine__formWrap">
        <div class="topLineForm flex flex--aic flex--jcc">
            <div class="topLineForm__close"></div>
            <form action="" method="POST" class="topLineForm__form">
                <div class="topLineForm__closeBttn">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.558547 0.558675C1.30328 -0.186225 2.51072 -0.186225 3.25545 0.558675L19.4369 16.7438C20.1816 17.4887 20.1816 18.6964 19.4369 19.4413C18.6922 20.1862 17.4847 20.1862 16.74 19.4413L0.558548 3.2562C-0.186182 2.5113 -0.186183 1.30357 0.558547 0.558675Z"
                              fill="#5C5B74"/>
                        <path d="M19.4415 0.558675C18.6967 -0.186225 17.4893 -0.186225 16.7445 0.558675L0.563116 16.7438C-0.181614 17.4887 -0.181615 18.6964 0.563115 19.4413C1.30784 20.1862 2.51529 20.1862 3.26002 19.4413L19.4415 3.2562C20.1862 2.5113 20.1862 1.30357 19.4415 0.558675Z"
                              fill="#5C5B74"/>
                    </svg>
                </div>
                <div class="topLineForm__title">Сделайте заказ с сайта<br> и получите <b>скидку 30%</b></div>
                <!-- <div class="topLineForm__text">Заполните форму и получите скидку 30%</div> -->
                <input type="text" name="phone" class="topLineForm__field phoneField" placeholder="+7 (___) __-__-__"
                       required="required">
                <button class="topLineForm__bttn Bttn">Получить скидку</button>
                <ul class="topLineForm__list flex flex--aic flex--jcs">
                    <li>Выезд мастера <b>за 30 минут</b></li>
                    <li><b>Бесплатная</b> диагностика</li>
                    <li>Официальная <b>гарантии 1 год</b></li>
                </ul>
            </form>
        </div>
    </div>
</section>
<header class="header">
    <div class="header__wrap wrap flex flex--aic flex--jcsb">
        <div class="header__logotype">
            <a href="/" class="headerLogotype flex flex--aic flex--jcs">
                <img src="/wp-content/themes/twentytwenty/images/logotype.png" alt="" class="headerLogotype__image">
            </a>
        </div>
        <nav class="header__nav">
            <ul class="headerNav flex flex--aic flex--jcs">
                <li class="headerNav__item">
                    <a href="/prices/" class="headerNav__link ">Цены</a>
                </li>
                <li class="headerNav__item">
                    <a href="/sales/" class="headerNav__link ">Акции</a>
                </li>
                <li class="headerNav__item">
                    <a href="/reviews/" class="headerNav__link ">Отзывы</a>
                </li>
                <li class="headerNav__item">
                    <a href="/about/" class="headerNav__link ">О компании</a>
                </li>
                <li class="headerNav__item">
                    <a href="/contacts/" class="headerNav__link ">Контакты</a>
                </li>
            </ul>
        </nav>
        <div class="header__covid">
            <div class="headerCovid">
                <div class="headerCovid__icon"></div>
                <div class="headerCovid__text">
                    <div class="headerCovid__close">
                        <svg height="311pt" viewBox="0 0 311 311.07733" width="311pt"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="m16.035156 311.078125c-4.097656 0-8.195312-1.558594-11.308594-4.695313-6.25-6.25-6.25-16.382812 0-22.632812l279.0625-279.0625c6.25-6.25 16.382813-6.25 22.632813 0s6.25 16.382812 0 22.636719l-279.058594 279.058593c-3.136719 3.117188-7.234375 4.695313-11.328125 4.695313zm0 0"/>
                            <path d="m295.117188 311.078125c-4.097657 0-8.191407-1.558594-11.308594-4.695313l-279.082032-279.058593c-6.25-6.253907-6.25-16.386719 0-22.636719s16.382813-6.25 22.636719 0l279.058594 279.0625c6.25 6.25 6.25 16.382812 0 22.632812-3.136719 3.117188-7.230469 4.695313-11.304687 4.695313zm0 0"/>
                        </svg>
                    </div>
                    <p>Мы работаем в обычном режиме. Мастера выезжают на дом без выходных и праздников.</p>
                    <p><b>Каждый день</b> мы проверяем у мастеров температуру и следим за их самочувствием.</p>
                    <p>Наша задача сделать так, чтобы <b>вы были спокойны</b> не только за свою технику, но и <b>за свое
                            здоровье</b>.</p>
                </div>
            </div>
        </div>
        <div class="header__phone">
            <div class="headerPhone">
                <!-- <div class="headerPhone__text">Работаем без выходных</div> -->
                <a href="tel:<?php the_field('telefon', 'options'); ?>"
                   class="headerPhone__link"><?php the_field('telefon', 'options'); ?></a>
            </div>
        </div>
        <div class="header__navToggle flex flex--aic flex--jcc">
            <a href="#" class="navToggle">
                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="navToggle__icon navToggle__icon--close">
                    <rect width="9" height="2" rx="1" transform="matrix(-1 0 0 1 16 12)" fill="#333333"/>
                    <rect width="14" height="2" rx="1" transform="matrix(-1 0 0 1 16 6)" fill="#333333"/>
                    <rect width="16" height="2" rx="1" transform="matrix(-1 0 0 1 16 0)" fill="#333333"/>
                </svg>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="navToggle__icon navToggle__icon--open">
                    <path d="M0.335128 0.335205C0.781966 -0.111735 1.50643 -0.111735 1.95327 0.335205L11.6621 10.0463C12.109 10.4932 12.109 11.2179 11.6621 11.6648C11.2153 12.1117 10.4908 12.1117 10.044 11.6648L0.335129 1.95372C-0.111709 1.50678 -0.11171 0.782145 0.335128 0.335205Z"
                          fill="#333333"/>
                    <path d="M11.6649 0.335205C11.218 -0.111735 10.4936 -0.111735 10.0467 0.335205L0.337869 10.0463C-0.108969 10.4932 -0.108969 11.2179 0.337869 11.6648C0.784707 12.1117 1.50917 12.1117 1.95601 11.6648L11.6649 1.95372C12.1117 1.50678 12.1117 0.782145 11.6649 0.335205Z"
                          fill="#333333"/>
                </svg>
            </a>
        </div>
    </div>
    <section class="mobileTopLine">
        <div class="mobileTopLine__wrap wrap flex flex--aic flex--jcs">
            <div class="mobileTopLine__text">РАБОТАЕМ <br>БЕЗ ВЫХОДНЫХ</div>
            <!-- <div class="mobileTopLine__text">Работаем без выходных</div> -->
            <div class="mobileTopLine__icon">
                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.1154 20C16.3464 20 16.5354 19.8095 16.5354 19.5767V16.1397C16.5354 15.1957 15.8466 14.4127 14.9268 14.3069C13.8936 14.1926 12.8856 13.9217 11.9322 13.5069C11.2266 13.1979 10.4244 13.346 9.89102 13.8836L9.27783 14.4974C7.76161 13.5069 6.45121 12.1905 5.4642 10.654L6.0774 10.036C6.61079 9.49841 6.75782 8.68993 6.45121 7.97881C6.03541 7.01375 5.76243 5.99363 5.64899 4.95238C5.54401 4.0296 4.76282 3.33119 3.83041 3.33119H0.419984C0.184784 3.33119 0 3.52167 0 3.75449C0 12.7153 7.22822 20 16.1154 20Z"
                          fill="#537CF4"/>
                    <path d="M19.6056 0H9.94558C9.18121 0 8.55541 0.630652 8.55541 1.40103V7.38199C8.55541 8.15237 9.18121 8.78306 9.94558 8.78306H10.5756V11.0307C10.5756 11.2042 10.6806 11.3566 10.836 11.4243C10.8906 11.4455 10.9452 11.4539 10.9956 11.4539C11.1048 11.4539 11.214 11.4116 11.2938 11.3312L13.8222 8.78306H19.6056C20.3742 8.78306 21 8.15237 21 7.38199V1.40103C21 0.630652 20.3742 0 19.6056 0ZM11.1288 2.8042H15.5125C15.7445 2.8042 15.9325 2.99375 15.9325 3.2275C15.9325 3.46125 15.7445 3.65077 15.5125 3.65077H11.1288C10.8968 3.65077 10.7088 3.46125 10.7088 3.2275C10.7088 2.99375 10.8968 2.8042 11.1288 2.8042ZM18.505 5.97882H11.1288C10.8968 5.97882 10.7088 5.7893 10.7088 5.55556C10.7088 5.32178 10.8968 5.13226 11.1288 5.13226H18.505C18.737 5.13226 18.925 5.32178 18.925 5.55556C18.925 5.7893 18.737 5.97882 18.505 5.97882Z"
                          fill="#537CF4"/>
                </svg>
            </div>
            <div class="mobileTopLine__phone flex">
                <a href="tel:<?php the_field('telefon', 'options'); ?>"><?php the_field('telefon', 'options'); ?></a>
            </div>
        </div>
    </section>
</header>

<section class="menu">
    <div class="menu__wrap wrap">
        <div class="menu__list flex flex--aic flex--jcsb">
            <div class="menu__item menu__item--first">
                <span>Что требуется починить?</span>
            </div>
            <div class="menu__item">
                <a href="/remont-stiralnyh-mashin/" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">Стиральная машина</span>
                </a>
                <div class="menu__sub">
                    <ul id="stir" class="menuSub">
                        <?php
                        global $post;
                        $queryArr = array(
                            'post_type' => 'any',
                            'post_parent' => 19,
                            'order' => 'ASC',
                            'posts_per_page' => -1,
                            'meta_query' 		=> array(
                                "template" 	=> array(
                                    "key" 	=> "_wp_page_template",
                                    "value" => "page-usl.php"
                                ),
                            ),
                        );
                        $stati_children = new WP_Query( $queryArr );
                        if($stati_children->have_posts()) :
                        while($stati_children->have_posts()): $stati_children->the_post();?>
                            <li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-266">
                                <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                            </li>
                        <?php endwhile;
                endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
            <div class="menu__item">
                <a href="/remont-posudomoechnyh-mashin/" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">Посудомоечная машина</span>
                </a>
                <div class="menu__sub">
                    <ul id="stir" class="menuSub">
                        <?php
                        global $post;
                        $queryArr = array(
                            'post_type' => 'any',
                            'post_parent' => 22,
                            'order' => 'ASC',
                            'posts_per_page' => -1,
                            'meta_query' 		=> array(
                                "template" 	=> array(
                                    "key" 	=> "_wp_page_template",
                                    "value" => "page-usl.php"
                                ),
                            ),
                        );
                        $stati_children = new WP_Query( $queryArr );
                        if($stati_children->have_posts()) :
                            while($stati_children->have_posts()): $stati_children->the_post();?>
                                <li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-266">
                                    <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                </li>
                            <?php endwhile;
                        endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
            <div class="menu__item">
                <a href="/remont-sushilnyh-mashin" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">Сушильная машина</span>
                </a>
                <div class="menu__sub">
                    <ul id="stir" class="menuSub">
                        <?php
                        global $post;
                        $queryArr = array(
                            'post_type' => 'any',
                            'post_parent' => 21,
                            'order' => 'ASC',
                            'posts_per_page' => -1,
                            'meta_query' 		=> array(
                                "template" 	=> array(
                                    "key" 	=> "_wp_page_template",
                                    "value" => "page-usl.php"
                                ),
                            ),
                        );
                        $stati_children = new WP_Query( $queryArr );
                        if($stati_children->have_posts()) :
                            while($stati_children->have_posts()): $stati_children->the_post();?>
                                <li id="menu-item-266" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-266">
                                    <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                                </li>
                            <?php endwhile;
                        endif; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
            <div class="menu__item mobile__menu">
                <a href="/prices" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">Цены</span>
                </a>
            </div>
            <div class="menu__item mobile__menu">
                <a href="/sales" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">Акции</span>
                </a>
            </div>
            <div class="menu__item mobile__menu">
                <a href="/reviews" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">Отзывы</span>
                </a>
            </div>
            <div class="menu__item mobile__menu">
                <a href="/about" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">О компании</span>
                </a>
            </div>
            <div class="menu__item mobile__menu">
                <a href="/contacts" class="menu__link flex flex--aic flex--jcs">
                    <span class="menu__text">Контакты</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/modal-win' ); ?>
	
<?php get_template_part( 'template-parts/mob_baner' ); ?>