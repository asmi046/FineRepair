<?php
/**
 * Template Name: Акции
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

                    <?php get_template_part( 'template-parts/faqsales' ); ?>

                    <?php get_template_part( 'template-parts/twoline' ); ?>

                    <?php get_template_part( 'template-parts/rek' ); ?>

                    <?php get_template_part( 'template-parts/shema' ); ?>


                    <?php get_template_part( 'template-parts/questions' ); ?>

                </div>
            </main>
        </div>
    </div>
</section>




<?php get_footer() ?>

