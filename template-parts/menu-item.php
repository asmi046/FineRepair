<div class="menu__item">
    <a href="/remont-sushilnyh-mashin" class="menu__link flex flex--aic flex--jcs">
        <span class="menu__text"><? echo $args['name']; ?> </span>
    </a>
    <div class="menu__sub">
        <ul id="stir" class="menuSub">
            <?php
            global $post;
            $queryArr = array(
                'post_type' => 'any',
                'post_parent' => intval($args['p_id']),
                'order' => 'ASC',
                'posts_per_page' => -1,
                'meta_query' 		=> array(
                    "template" 	=> array(
                        "key" 	=> "_wp_page_template",
                        "value" => "page-usl.php"
                    ),
                ),
            );
            // var_dump($queryArr);
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