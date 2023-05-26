<section class="BigServices">
    <div class="BigServices__wrap wrap">
        <div class="BigServices__list flex flex--aistr flex--jcs">
            <div class="BigServices__item BigServices__item--el1 BigServices__item--big">
                <a href="/remont-stiralnyh-mashin/" class="BigService BigService--big flex flex--aic flex--jcs">
                    <div class="BigService__left">
                        <h2 class="BigService__title">Ремонт стиральных машин</h2>
                        <ul class="BigService__list">
                            <li>Бесплатная диагностика</li>
                            <li>Гарантия до 1 года</li>
                            <li>Замена ТЭНа</li>
                        </ul>
                        <div class="BigService__sPrice BigService__sPrice--big">от 350 р.</div>
                    </div>
                    <div class="BigService__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bigservice/1.png" alt="" class="BigService__image">
                    </div>
                </a>
            </div>
            <div class="BigServices__item BigServices__item--el2 BigServices__item--big">
                <a href="/remont-sushilnyh-mashin/" class="BigService BigService--big flex flex--aic flex--jcs">
                    <div class="BigService__left">
                        <h2 class="BigService__title">Ремонт сушильных машин</h2>
                        <ul class="BigService__list">
                            <li>Бесплатная диагностика</li>
                            <li>Устранение засора</li>
                            <li>Замена сенсора влажности</li>
                        </ul>
                        <div class="BigService__sPrice BigService__sPrice--big">от 390 р.</div>
                    </div>
                    <div class="BigService__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bigservice/2.png" alt="" class="BigService__image">
                    </div>
                </a>
            </div>
            <div class="BigServices__item BigServices__item--el3 BigServices__item--big">
                <a href="/remont-posudomoechnyh-mashin/" class="BigService BigService--big flex flex--aic flex--jcs">
                    <div class="BigService__left">
                        <h2 class="BigService__title">Ремонт посудомоечных машин</h2>
                        <ul class="BigService__list">
                            <li>Бесплатная диагностика</li>
                            <li>Замена датчика температуры</li>
                            <li>Гарантия до 1 года</li>
                        </ul>
                        <div class="BigService__sPrice BigService__sPrice--big">от 450 р.</div>
                    </div>
                    <div class="BigService__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bigservice/3.png" alt="" class="BigService__image">
                    </div>
                </a>
            </div>


            <? get_template_part('template-parts/sevises-main-card', null, ["name" => "Холодильник", "price" => "550", "img_name" => "holodilnik_1.png", "lnk" => "holodilnik" ] ) ?>
            <? get_template_part('template-parts/sevises-main-card', null, ["name" => "Духовой шкаф", "price" => "550", "img_name" => "duh_1.png", "lnk" => "duhovoj-shkaf" ] ) ?>
            <? get_template_part('template-parts/sevises-main-card', null, ["name" => "Варочная панель", "price" => "550", "img_name" => "varpanel_1.png", "lnk" => "varochnaya-panel" ] ) ?>
            
        </div>
    </div>
</section>