<div class="main__malfunctions">
    <section class="mainMalfunctions mainMalfunctions--gray">
        <div class="mainMalfunctions__title Title">
            <h2 class="Title__text">Частые <span>поломки</span></h2>
            <span>Мы всегда к ним готовы</span>
        </div>
        <ul class="mainMalfunctions__list mainMalfunctions__list--gray mainMalfunctions__list--gray2 flex flex--aic flex--jcs">


            <?php
            global $post;
            if ( is_page('remont-stiralnyh-mashin') || '19' == $post->post_parent ) {

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 19,
                    'posts_per_page' => 6,
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
                        <li class="mainMalfunctions__item mainMalfunctions__item--big">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                        <li class="mainMalfunctions__item">
                            <a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a>
                        </li>
                    <?php endwhile;
                endif; wp_reset_query();

            } elseif ( is_page('remont-sushilnyh-mashin') || '21' == $post->post_parent ){

                $queryArr = array(
                    'post_type' => 'page',
                    'post_parent' => 21,
                    'posts_per_page' => 6,
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
                    'post_parent' => 22,
                    'posts_per_page' => 6,
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
                    'post_parent' => 19,
                    'posts_per_page' => 6,
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
        </ul>
    </section>
</div>