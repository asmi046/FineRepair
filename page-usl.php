<?php
/**
 * Template Name: Неисправности
 */
get_header(); ?>
<?php get_template_part( 'template-parts/baner_other' ); ?>
<section class="site">
    <div class="site__wrap wrap flex flex--ais flex--jcs">

        <?php get_template_part( 'template-parts/left' ); ?>
        <div class="site__right">
            <main class="main">
                <div class="main__wrap">

                    <?php get_template_part( 'template-parts/price' ); ?>
                    
                    <?php get_template_part( 'template-parts/text-blk' ); ?>

                    <?php get_template_part( 'template-parts/rek' ); ?>

                    <?php get_template_part( 'template-parts/barnds' ); ?>

                    <?php get_template_part( 'template-parts/masters' ); ?>

                    <?php get_template_part( 'template-parts/neispravnosti' ); ?>

                    <?php get_template_part( 'template-parts/reviews' ); ?>


                    <?php get_template_part( 'template-parts/questions' ); ?>

                </div>
            </main>
        </div>
    </div>
</section>
<?php get_footer() ?>

