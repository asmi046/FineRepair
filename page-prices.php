<?php
/**
 * Template Name: Цены
 */
get_header(); ?>

<section class="speedbar">
    <div class="speedbar__wrap wrap">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>
<section class="site">
    <div class="site__wrap wrap flex flex--ais flex--jcs">

        <?php get_template_part( 'template-parts/left' ); ?>
        <div class="site__right">
            <main class="main">
                <div class="main__wrap">
                    <div class="main__content">
                        <article class="Cont">
                            <h2 class="Cont__title"><?= the_title() ?></h2>
                            <div class="Cont__flex Cont__flex--m10 flex flex--ais flex--jcs">
                            </div>
                        </article>
                    </div>
                    <?php get_template_part( 'template-parts/price' ); ?>

                    <?php get_template_part( 'template-parts/rek' ); ?>

                    <?php get_template_part( 'template-parts/twoline' ); ?>

                    <?php get_template_part( 'template-parts/shema' ); ?>


                    <?php get_template_part( 'template-parts/questions' ); ?>

                </div>
            </main>
        </div>
    </div>
</section>


<?php get_footer() ?>

