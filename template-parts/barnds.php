<div class="main__brands">
    <section class="mainBrands">
        <div class="mainBrands__title Title">

            <?php 
                $bt_name = "";

                if ( is_page('remont-stiralnyh-mashin') || '19' == $post->post_parent ) $bt_name = "стиральную машину";
                if ( is_page('remont-sushilnyh-mashin') || '21' == $post->post_parent ) $bt_name = "сушильную машину";
                if ( is_page('remont-posudomoechnyh-mashin') || '22' == $post->post_parent ) $bt_name = "посудомоечную машину";
                if ( is_page('holodilnik') || '663' == $post->post_parent ) $bt_name = "холодильник"; 
                if ( is_page('duhovoj-shkaf') || '665' == $post->post_parent ) $bt_name = "духовой шкаф";
                if ( is_page('varochnaya-panel') || '667' == $post->post_parent ) $bt_name = "варочную панель"; 
            ?>

            <h2 class="Title__text">Починим <?php echo $bt_name?> <span>любого бренда</span></h2>
            <span>Любая модель по плечу!</span>
        </div>
        <div class="mainBrands__list flex flex--aic flex--jcs">
            <?php
            global $post;
            if ( is_page('remont-stiralnyh-mashin') || '19' == $post->post_parent ) {

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 19,
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        "template" 	=> array(
                            "key" 	=> "_wp_page_template",
                            "value" => "page-brand.php"
                        ),
                    ),
                );
                $stati_children = new WP_Query( $queryArr );
                if($stati_children->have_posts()) :
                    while($stati_children->have_posts()): $stati_children->the_post();?>
                        <div class="mainBrands__item">
                            <a href="<?= get_the_permalink() ?>">
                                <?php if( get_field('logo') ): ?>
                                    <img src="<?php the_field('logo'); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>

                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-sushilnyh-mashin') || '21' == $post->post_parent ){

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 21,
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        "template" 	=> array(
                            "key" 	=> "_wp_page_template",
                            "value" => "page-brand.php"
                        ),
                    ),
                );
                $stati_children = new WP_Query( $queryArr );
                if($stati_children->have_posts()) :
                    while($stati_children->have_posts()): $stati_children->the_post();?>
                        <div class="mainBrands__item">
                            <a href="<?= get_the_permalink() ?>">
                                <?php if( get_field('logo') ): ?>
                                    <img src="<?php the_field('logo'); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>

                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-posudomoechnyh-mashin') || '22' == $post->post_parent ){

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 22,
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        "template" 	=> array(
                            "key" 	=> "_wp_page_template",
                            "value" => "page-brand.php"
                        ),
                    ),
                );
                $stati_children = new WP_Query( $queryArr );
                if($stati_children->have_posts()) :
                    while($stati_children->have_posts()): $stati_children->the_post();?>
                        <div class="mainBrands__item">
                            <a href="<?= get_the_permalink() ?>">
                                <?php if( get_field('logo') ): ?>
                                    <img src="<?php the_field('logo'); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>

                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('holodilnik') || '663' == $post->post_parent ) {

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 663,
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        "template" 	=> array(
                            "key" 	=> "_wp_page_template",
                            "value" => "page-brand.php"
                        ),
                    ),
                );
                $stati_children = new WP_Query( $queryArr );
                if($stati_children->have_posts()) :
                    while($stati_children->have_posts()): $stati_children->the_post();?>
                        <div class="mainBrands__item">
                            <a href="<?= get_the_permalink() ?>">
                                <?php if( get_field('logo') ): ?>
                                    <img src="<?php the_field('logo'); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>

                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('duhovoj-shkaf') || '665' == $post->post_parent ) {

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 665,
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        "template" 	=> array(
                            "key" 	=> "_wp_page_template",
                            "value" => "page-brand.php"
                        ),
                    ),
                );
                $stati_children = new WP_Query( $queryArr );
                if($stati_children->have_posts()) :
                    while($stati_children->have_posts()): $stati_children->the_post();?>
                        <div class="mainBrands__item">
                            <a href="<?= get_the_permalink() ?>">
                                <?php if( get_field('logo') ): ?>
                                    <img src="<?php the_field('logo'); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>

                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('varochnaya-panel') || '667' == $post->post_parent ) {

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 667,
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        "template" 	=> array(
                            "key" 	=> "_wp_page_template",
                            "value" => "page-brand.php"
                        ),
                    ),
                );
                $stati_children = new WP_Query( $queryArr );
                if($stati_children->have_posts()) :
                    while($stati_children->have_posts()): $stati_children->the_post();?>
                        <div class="mainBrands__item">
                            <a href="<?= get_the_permalink() ?>">
                                <?php if( get_field('logo') ): ?>
                                    <img src="<?php the_field('logo'); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>

                    <?php endwhile;
                endif; wp_reset_query();

            } else {

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 19,
                    'posts_per_page' => -1,
                    'meta_query' 		=> array(
                        "template" 	=> array(
                            "key" 	=> "_wp_page_template",
                            "value" => "page-brand.php"
                        ),
                    ),
                );
                $stati_children = new WP_Query( $queryArr );
                if($stati_children->have_posts()) :
                    while($stati_children->have_posts()): $stati_children->the_post();?>
                        <div class="mainBrands__item">
                            <a href="<?= get_the_permalink() ?>">
                                <?php if( get_field('logo') ): ?>
                                    <img src="<?php the_field('logo'); ?>" />
                                <?php endif; ?>
                            </a>
                        </div>

                    <?php endwhile;
                endif; wp_reset_query();

            } ?>







<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/ardo/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/ardo.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/bosch/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/bosch.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/samsung/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/samsung.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/beko/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/beko.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/electrolux/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/electrolux.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/gorenje/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/gorenje.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/indesit/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/indesit.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/lg/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/lg.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/siemens/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/siemens.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/candy/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/candy-logo.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/hotpoint/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/hotpoint.png"-->
<!--                            alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/hansa/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/hansa-logo.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/miele/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/miele-logo.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/asko/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/asko.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/atlant/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/atlant.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/brandt/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/brandt.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/daewoo/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/daewoo.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/soba/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/eurosoba.png"-->
<!--                            alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/haier/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/haier.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/kaiser/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/kaiser.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/vestel/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/vestel.png" alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/whirlpool/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/whirlpool.png"-->
<!--                            alt=""></a>-->
<!--            </div>-->
<!--            <div class="mainBrands__item">-->
<!--                <a href="https://remont-stolitsa.ru/stiralnaya-mashina/zanussi/"><img-->
<!--                            src="--><?php //echo get_template_directory_uri(); ?><!--/images/brand/zanussi.png" alt=""></a>-->
<!--            </div>-->
        </div>


    </section>
</div>