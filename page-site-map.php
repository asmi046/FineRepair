<?php
/**
 * Template Name: Карта сайта
 */
get_header(); ?>

<section class="site">
    <div class="site__wrap wrap flex flex--ais flex--jcs">

        <?php get_template_part( 'template-parts/left' ); ?>
        <div class="site__right">
            <main class="main">
                <div class="main__wrap">
                    <div class="main__content">
                        <article class="Cont">
                            <div class="mainMasters__title Title">
                                <h1 class="Title__text">Карта <span>сайта</span></h1>
                            </div>

                            <div class="Cont__text Cont__text--about Cont__text--sitemap">
                                <?php if ( have_posts() ) { 
                                    while ( have_posts() ) {
                                        the_post();    
                                        the_content();
                                
                                    }
                                } 
                                ?>
                            </div>
                        </article>
                    </div>

                    <?php get_template_part( 'template-parts/rek' ); ?>

                    <?php get_template_part( 'template-parts/masters' ); ?>

                    <?php get_template_part( 'template-parts/shema' ); ?>


                    <?php get_template_part( 'template-parts/questions' ); ?>

                </div>
            </main>
        </div>
    </div>
</section>



<?php get_footer() ?>

