<section class="speedbar">
    <div class="speedbar__wrap wrap">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>
<section class="slider slider--service">
    <div class="slider__wrap wrap">
        <div class="slider__list">
            <div class="slider__item">
                <div class="slide slide--service slide--3 slide--5">
                    <div class="slide__wrap wrap flex flex--aic flex--jcs">
                        <div class="slide__left">
                            <h1 class="slide__title slide__title--mb">
                                <?= the_title() ?>
                            </h1>
                            <div class="slide__time flex flex--aic flex--jcs">
                                <svg width="34" height="56" viewBox="0 0 34 56" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.4186 28.9463L34 26.5871L32.9403 20.4886L26.1519 20.5534C25.3791 18.4017 24.277 16.4115 22.9135 14.6382L26.3596 8.71128L21.683 4.7309L16.632 9.11307C14.684 7.98183 12.5476 7.14784 10.2782 6.68208L9.17999 0H3.07534L1.98561 6.63449C-0.283829 7.0706 -2.42715 7.86793 -4.38281 8.96796L-9.50001 4.52884L-14.1765 8.50922L-10.742 14.4158C-12.1186 16.1595 -13.2352 18.1216 -14.0343 20.2444L-20.9403 20.1789L-22 26.2774L-15.4262 28.6343C-15.3632 30.8694 -14.9687 33.0188 -14.2888 35.0355L-19.7875 39.6275L-16.7351 44.9904L-10.0291 42.4416C-8.6433 44.0237 -7.03447 45.3992 -5.25106 46.5171L-6.5815 53.7742L-0.845228 55.8923L2.71543 49.4981C3.78593 49.6651 4.88259 49.7525 5.99924 49.7525C6.98515 49.7525 7.95414 49.6791 8.90544 49.5481L12.4984 56L18.2347 53.8819L16.9211 46.7176C18.7353 45.6262 20.3772 44.2726 21.7961 42.7061L28.5252 45.2634L31.5775 39.9006L26.1719 35.3858C26.8925 33.3613 27.3232 31.1979 27.4186 28.9463ZM6.00077 43.4355C-2.40254 43.4355 -9.2147 36.5248 -9.2147 28C-9.2147 19.4752 -2.40254 12.5645 6.00077 12.5645C14.4041 12.5645 21.2162 19.4752 21.2162 28C21.2162 36.524 14.4041 43.4355 6.00077 43.4355Z" fill="#F0A366"></path></svg>
                                <span>Выезд мастера <b>за 30 минут</b></span>
                            </div>
                            <ul class="slide__list">
                                <li class="slide__item">Выезд мастера <b>за 30 минут</b></li>
                                <li class="slide__item">Бесплатная <b>диагностика</b></li>
                                <li class="slide__item">Официальная гарантия <b>1 год</b></li>
                            </ul>
                        </div>
                        <div class="slide__right">
                            <div class="slide__preview flex flex--aic flex--jcc">
                                <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>