<div class="BigServices__item BigServices__item--el3 BigServices__item--big">
                <a href="/<? echo $args['lnk']; ?>" class="BigService BigService--big flex flex--aic flex--jcs">
                    <div class="BigService__left">
                        <h2 class="BigService__title"><? echo $args['name']; ?></h2>
                        <ul class="BigService__list">
                            <li>Бесплатная диагностика</li>
                            <li>Замена датчика температуры</li>
                            <li>Гарантия до 1 года</li>
                        </ul>
                        <div class="BigService__sPrice BigService__sPrice--big">от <? echo $args['price']; ?> р.</div>
                    </div>
                    <div class="BigService__right">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bigservice/<? echo $args['img_name']; ?>" alt="" class="BigService__image">
                    </div>
                </a>
</div>