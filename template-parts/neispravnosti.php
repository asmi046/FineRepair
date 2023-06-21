<div class="main__malfunctions main__malfunctions--nmt">
    <section class="mainMalfunctions">

        <?php 
            $bt_name = "";

            if ( is_page('remont-stiralnyh-mashin') || '19' == $post->post_parent ) $bt_name = "стиральных машин";
            if ( is_page('remont-sushilnyh-mashin') || '21' == $post->post_parent ) $bt_name = "сушильных машин";
            if ( is_page('remont-posudomoechnyh-mashin') || '22' == $post->post_parent ) $bt_name = "посудомоечных машин";
            if ( is_page('remont-holodilnikov') || '663' == $post->post_parent ) $bt_name = "холодильников"; 
            if ( is_page('remont-duhovyh-shkafov') || '665' == $post->post_parent ) $bt_name = "духовых шкафов";
            if ( is_page('remont-varochnyh-panelej') || '667' == $post->post_parent ) $bt_name = "варочных панелей"; 
        ?>

        <div class="mainMalfunctions__title Title">
            <h2 class="Title__text">Частые неисправности <span><?php echo $bt_name ?></span></h2>
        </div>
        <ul class="mainMalfunctions__list mainMalfunctions__list--hidden flex flex--aic flex--jcs">


            <?php
            global $post;
            if ( is_page('remont-stiralnyh-mashin') || '19' == $post->post_parent ) {

                $queryArr = array(
                    'post_type' => 'page',
                    'order' => 'ASC',
                    'post_parent' => 19,
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
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-sushilnyh-mashin') || '21' == $post->post_parent ){

                $queryArr = array(
                    'post_type' => 'page',
                    'order' => 'ASC',
                    'post_parent' => 21,
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
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-posudomoechnyh-mashin') || '22' == $post->post_parent ){

                $queryArr = array(
                    'post_type' => 'page',
                    'order' => 'ASC',
                    'post_parent' => 22,
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
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-holodilnikov') || '663' == $post->post_parent ){

                $queryArr = array(
                    'post_type' => 'page',
                    'order' => 'ASC',
                    'post_parent' => 663,
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
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-duhovyh-shkafov') || '665' == $post->post_parent ){

                $queryArr = array(
                    'post_type' => 'page',
                    'order' => 'ASC',
                    'post_parent' => 665,
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
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-varochnyh-panelej') || '667' == $post->post_parent ) {

                $queryArr = array(
                    'post_type' => 'page',
                    'order' => 'ASC',
                    'post_parent' => 667,
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
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } else {

                $queryArr = array(
                    'post_type' => 'page',
                    'order' => 'ASC',
                    'post_parent' => 19,
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
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } ?>




<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/ne-rabotaet-mikrofon/">Не работает микрофон</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-sam-perezagruzhaetsya/">Перезагружается</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/polosy-na-ekrane-noutbuka/">Полосы на экране</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/uronil-noutbuk/">Уронили</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/remont-noutbuka-posle-zalitiya/">Попала вода</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/nastrojka-bios/">Настройка BIOS</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/sinij-ekran-na-windows/">Синий экран на Windows</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-zavisaet/">Зависает</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-ne-vidit-ustrojstva/">Не видит устройства</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-peregrevaetsya/">Греется</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/ispravim-oshibku-kompjutera/">Ошибка</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-gljuchit/">Глючит</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/net-izobrazheniya-na-kompjutere/">Нет изображения</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/ne-znaete-chto-s-kompjuterom/">Не знаю</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/na-kompjutere-net-zvuka/">Нет звука</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-prosit-otpravit-sms/">ПК просит отправить СМС</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/udalyaem-virusy-s-kompjutera/">Вирусы</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-ne-zagruzhaetsya/">Не грузится</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-ne-vkljuchaetsya/">Не включается</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-shumit/">Шумит</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/na-kompjutere-ne-rabotajut-razemy/">Не работают разъемы</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/ne-rabotaet-internet/">Проблема с интернетом</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-sam-vykljuchaetsya/">Выключается</a>-->
<!--            </li>-->
<!--            <li class="mainMalfunctions__item">-->
<!--                <a href="http://fine-repair/s/kompjuter-tormozit/">Тормозит</a>-->
<!--            </li>-->
            <span>Показать больше</span>
        </ul>
    </section>					</div>