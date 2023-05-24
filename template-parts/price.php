

            <?php
            global $post;     // Если за пределами цикла

            if ( is_page('19') || is_page('19') && $post->post_parent ) {
                $rows = get_field('czeny', 'options');
                if($rows) { ?>
            <div class="main__prices">
                <section class="mainPrices">
                    <div class="mainPrices__wrap">
                        <div class="mainPrices__title Title">
                            <h2 class="Title__text">Цены на <span>услуги</span></h2>
                            <span>У нас демократичные цены и высокое качество</span>
                        </div>
                    <div class="mainPrices__table">
                        <table class="mainPrices__list">
                            <?php foreach($rows as $row)
                            {
                                echo '<tr>';
                                echo '<td>' . $row['usluga'] . '</td>';
                                echo '<td>' . $row['stoimost'] . '</td>';
                                echo '</tr>';
                            } ?>
                        </table>
                    </div>
                    </div>
                </section>
            </div>
                <?php }
            } elseif (is_page('22') || is_page('22') && $post->post_parent) {
                $rows = get_field('czeny_p', 'options');
                if($rows) { ?>

                    <div class="main__prices">
                        <section class="mainPrices">
                            <div class="mainPrices__wrap">
                                <div class="mainPrices__title Title">
                                    <h2 class="Title__text">Цены на <span>услуги</span></h2>
                                    <span>У нас демократичные цены и высокое качество</span>
                                </div>
                                <div class="mainPrices__table">
                                    <table class="mainPrices__list">
                                        <?php foreach($rows as $row)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $row['usluga'] . '</td>';
                                            echo '<td>' . $row['stoimost'] . '</td>';
                                            echo '</tr>';
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                <?php }
            } elseif (is_page('21') || is_page('21') && $post->post_parent) {
                $rows = get_field('czeny_s', 'options');
                if($rows) { ?>

                    <div class="main__prices">
                        <section class="mainPrices">
                            <div class="mainPrices__wrap">
                                <div class="mainPrices__title Title">
                                    <h2 class="Title__text">Цены на <span>услуги</span></h2>
                                    <span>У нас демократичные цены и высокое качество</span>
                                </div>
                                <div class="mainPrices__table">
                                    <table class="mainPrices__list">
                                        <?php foreach($rows as $row)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $row['usluga'] . '</td>';
                                            echo '<td>' . $row['stoimost'] . '</td>';
                                            echo '</tr>';
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                <?php }
            } elseif (is_page('55') || is_page('55') && $post->post_parent) {
                $rows = get_field('czeny', 'options');
                if($rows) { ?>

                    <div class="main__prices main__prices--page">
                        <section class="mainPrices">
                            <div class="mainPrices__wrap">
                                <div class="mainPrices__title Title">
                                    <h3>Ремонт стиральных машин</h3>
                                </div>
                                <div class="mainPrices__table">
                                    <table class="mainPrices__list">
                                        <?php foreach($rows as $row)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $row['usluga'] . '</td>';
                                            echo '<td>' . $row['stoimost'] . '</td>';
                                            echo '</tr>';
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                <?php }
                $rows = get_field('czeny_p', 'options');
                if($rows) { ?>

                    <div class="main__prices main__prices--page">
                        <section class="mainPrices">
                            <div class="mainPrices__wrap">
                                <div class="mainPrices__title Title">
                                    <h3>Ремонт посудомоечных машин</h3>
                                </div>
                                <div class="mainPrices__table">
                                    <table class="mainPrices__list">
                                        <?php foreach($rows as $row)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $row['usluga'] . '</td>';
                                            echo '<td>' . $row['stoimost'] . '</td>';
                                            echo '</tr>';
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                <?php }
                $rows = get_field('czeny_s', 'options');
                if($rows) { ?>

                    <div class="main__prices main__prices--page">
                        <section class="mainPrices">
                            <div class="mainPrices__wrap">
                                <div class="mainPrices__title Title">
                                    <h3>Ремонт сушильных машин</h3>
                                </div>
                                <div class="mainPrices__table">
                                    <table class="mainPrices__list">
                                        <?php foreach($rows as $row)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $row['usluga'] . '</td>';
                                            echo '<td>' . $row['stoimost'] . '</td>';
                                            echo '</tr>';
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                <?php }
            } else {
                $rows = get_field('czeny', 'options');
                if($rows) { ?>

                    <div class="main__prices">
                        <section class="mainPrices">
                            <div class="mainPrices__wrap">
                                <div class="mainPrices__title Title">
                                    <h2 class="Title__text">Цены на <span>услуги</span></h2>
                                    <span>У нас демократичные цены и высокое качество</span>
                                </div>
                                <div class="mainPrices__table">
                                    <table class="mainPrices__list">
                                        <?php foreach($rows as $row)
                                        {
                                            echo '<tr>';
                                            echo '<td>' . $row['usluga'] . '</td>';
                                            echo '<td>' . $row['stoimost'] . '</td>';
                                            echo '</tr>';
                                        } ?>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                <?php }
            } ?>