<?php
/**
 * Template Name: Контакты
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

                    <article class="Cont">
                        <h2 class="Cont__title">Контактная информация</h2>
                        <div class="Cont__flex Cont__flex--contacts Cont__flex--m10 flex flex--ais flex--jcs">
                            <div class="Cont__flexItem Cont__flexItem--coll3 Cont__flexItem--m10">
                                <div class="ContactsBox flex flex--aic flex--jcs">
                                    <div class="ContactsBox__icon">
                                        <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M26.0916 32C26.4656 32 26.7716 31.6952 26.7716 31.3227V25.8235C26.7716 24.3132 25.6564 23.0603 24.1672 22.891C22.4944 22.7081 20.8624 22.2747 19.3188 21.611C18.1764 21.1166 16.8776 21.3536 16.014 22.2137L15.0212 23.1958C12.5664 21.611 10.4448 19.5047 8.84681 17.0463L9.8396 16.0576C10.7032 15.1975 10.9412 13.9039 10.4448 12.7661C9.77161 11.222 9.32964 9.58981 9.14598 7.92381C8.97601 6.44737 7.71123 5.32991 6.20161 5.32991H0.679975C0.299174 5.32991 0 5.63467 0 6.00719C0 20.3445 11.7028 32 26.0916 32Z" fill="url(#paint0_linear)"></path>
                                            <path d="M31.7424 0H16.1024C14.8648 0 13.8516 1.00904 13.8516 2.24165V11.8112C13.8516 13.0438 14.8648 14.0529 16.1024 14.0529H17.1224V17.6491C17.1224 17.9267 17.2924 18.1705 17.5441 18.2789C17.6324 18.3128 17.7208 18.3263 17.8024 18.3263C17.9792 18.3263 18.156 18.2586 18.2852 18.1299L22.3788 14.0529H31.7424C32.9868 14.0529 34 13.0438 34 11.8112V2.24165C34 1.00904 32.9868 0 31.7424 0ZM18.018 4.48672H25.1155C25.4911 4.48672 25.7955 4.79001 25.7955 5.164C25.7955 5.538 25.4911 5.84122 25.1155 5.84122H18.018C17.6425 5.84122 17.338 5.538 17.338 5.164C17.338 4.79001 17.6425 4.48672 18.018 4.48672ZM29.9605 9.56611H18.018C17.6425 9.56611 17.338 9.26288 17.338 8.88889C17.338 8.51484 17.6425 8.21161 18.018 8.21161H29.9605C30.3361 8.21161 30.6405 8.51484 30.6405 8.88889C30.6405 9.26288 30.3361 9.56611 29.9605 9.56611Z" fill="url(#paint1_linear)"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="5.21127e-07" y1="16" x2="33.8342" y2="18.3684" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F2BA7D"></stop>
                                                    <stop offset="1" stop-color="#FC8332"></stop>
                                                </linearGradient>
                                                <linearGradient id="paint1_linear" x1="5.21127e-07" y1="16" x2="33.8342" y2="18.3684" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F2BA7D"></stop>
                                                    <stop offset="1" stop-color="#FC8332"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="ContactsBox__title">
                                        <a href="tel:<?php the_field('telefon', 'options'); ?>"><?php the_field('telefon', 'options'); ?></a>
                                    </div>
                                    <div class="ContactsBox__text">Многоканальная линия. <br>Консультации, прием заказов. <br> info@fine-repair.ru</div>
                                </div>
                            </div>
                            <div class="Cont__flexItem Cont__flexItem--coll3 Cont__flexItem--m10">
                                <div class="ContactsBox flex flex--aic flex--jcs">
                                    <div class="ContactsBox__icon">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.0004 0C24.8367 0 32 7.16361 32 15.9996C32 24.8356 24.8367 32 16.0004 32C7.16417 32 0.000278473 24.8358 0.000278473 15.9996C0.000278473 7.16334 7.16417 0 16.0004 0ZM14.8935 17.9361C14.8935 17.9428 14.8955 17.9494 14.8955 17.9561C14.8963 17.9981 14.9027 18.0402 14.9085 18.0822C14.9126 18.1138 14.9146 18.1461 14.9218 18.1771C14.9289 18.2095 14.9411 18.2413 14.9516 18.2737C14.9641 18.3127 14.9757 18.3517 14.992 18.3885C14.9951 18.3948 14.9962 18.4018 14.9989 18.4081C15.023 18.4596 15.0509 18.5077 15.0817 18.5534C15.0836 18.5561 15.0861 18.5589 15.088 18.5617C15.1229 18.6128 15.1627 18.6593 15.2045 18.703C15.2161 18.7149 15.228 18.7257 15.2402 18.737C15.277 18.7722 15.3157 18.8043 15.3569 18.8336C15.3697 18.8427 15.3818 18.8524 15.3951 18.8613C15.4479 18.8958 15.5033 18.9263 15.5608 18.9512C15.5733 18.9567 15.5863 18.96 15.599 18.965C15.6477 18.9838 15.6969 18.9993 15.7478 19.0112C15.7661 19.0156 15.7841 19.0195 15.8026 19.0228C15.8679 19.0347 15.934 19.043 16.001 19.043C16.0145 19.043 16.0284 19.0389 16.0419 19.0383C16.1061 19.0358 16.1697 19.0309 16.2309 19.0179C16.25 19.0137 16.2688 19.0054 16.2879 19.0001C16.3448 18.9847 16.4005 18.9675 16.4536 18.9437C16.4597 18.9407 16.466 18.9401 16.4721 18.9373L22.6071 16.0436C23.1599 15.783 23.3967 15.1234 23.1361 14.5707C22.8755 14.0182 22.2159 13.7811 21.6632 14.0417L17.1067 16.1905V6.63991C17.1067 6.02879 16.6113 5.53331 16.0001 5.53331C15.389 5.53331 14.8935 6.02879 14.8935 6.63991V17.9361Z" fill="url(#paint0_linear)"></path>
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="32" y1="16" x2="0.138568" y2="18.0991" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#F2BA7D"></stop>
                                                    <stop offset="1" stop-color="#FC8332"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <div class="ContactsBox__title">КРУГЛОСУТОЧНО <small>ПРИЕМ ЗАЯВОК ONLINE</small></div>
                                    <div class="ContactsBox__text">Работаем без выходных<br> <?php the_field('vremya_raboty', 'options'); ?></div>
                                </div>
                            </div>
                            <div class="Cont__flexItem Cont__flexItem--coll3 Cont__flexItem--m10">
                                <div class="ContactsBox flex flex--aic flex--jcs">
                                    <div class="ContactsBox__icon">
                                        <svg width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.4293 14.4611L28.2764 9.25288V3.23655C28.2764 2.14872 27.4043 1.26711 26.3264 1.26711C25.251 1.26711 24.3788 2.14872 24.3788 3.23655V5.31352L20.5421 1.43547C18.6452 -0.480766 15.3471 -0.477367 13.4545 1.43894L0.570432 14.4611C-0.190144 15.2313 -0.190144 16.4777 0.570432 17.2468C1.33135 18.0168 2.56686 18.0168 3.32751 17.2468L16.2104 4.22429C16.63 3.80232 17.3698 3.80232 17.7872 4.22304L30.6723 17.2468C31.0544 17.6318 31.5525 17.8234 32.0505 17.8234C32.5495 17.8234 33.0485 17.6316 33.4294 17.2468C34.1902 16.4778 34.1902 15.2314 33.4293 14.4611Z" fill="url(#paint0_linear)"></path><path d="M17.6768 7.96277C17.3025 7.58464 16.6964 7.58464 16.3232 7.96277L4.99031 19.4139C4.81139 19.5947 4.70995 19.8415 4.70995 20.0991V28.4511C4.70995 30.411 6.28217 32 8.22115 32H13.8321V23.2173H20.1667V32H25.7777C27.7166 32 29.2888 30.411 29.2888 28.4512V20.0991C29.2888 19.8415 29.1883 19.5947 29.0085 19.4139L17.6768 7.96277Z" fill="url(#paint1_linear)"></path><defs><linearGradient id="paint0_linear" x1="5.21127e-07" y1="16" x2="33.8342" y2="18.3684" gradientUnits="userSpaceOnUse"><stop stop-color="#EDA443"></stop><stop offset="1" stop-color="#EA6F2D"></stop></linearGradient><linearGradient id="paint1_linear" x1="5.21127e-07" y1="16" x2="33.8342" y2="18.3684" gradientUnits="userSpaceOnUse"><stop stop-color="#EDA443"></stop><stop offset="1" stop-color="#EA6F2D"></stop></linearGradient></defs></svg>
                                    </div>
                                    <div class="ContactsBox__title">
                                        <?php the_field('adres', 'options'); ?>
                                    </div>
                                    <div class="ContactsBox__text">Адрес нашего<br>главного офиса</div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="Cont__text Cont__text--contacts">
                            <h3>Выезжаем в любой район Москвы <br>и ближайшего Подмосковья</h3>
                        </div>
                        <br>
                        <div class="contactsMap">
                            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae6a08acdce6f414bdb0cd1afa3bf34abb229ec5375ce476acd0c8e06715b979b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                        </div>
                        <div class="mainServicesAlt__text">
                            <div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="14" height="14" rx="7" stroke="#4BB4F5" stroke-width="2"></rect>
                                    <rect x="4" y="4" width="8" height="8" rx="4" fill="#4BB4F5"></rect>
                                </svg>
                                &nbsp;&nbsp;&nbsp;– &nbsp;В данный момент наши мастера на заявках: </div>

                        </div>
                    </article>




                    <div class="main__services">
                        <section class="mainServicesAlt">
                            <h2 class="mainServicesAlt__title"><span>FINE REPAIR</span> – помощь людям <br>в ремонте бытовой техники</h2>
                            <div class="mainServicesAlt__list flex flex--aistr flex--jcc">
                                <div class="mainServicesAlt__item mainServicesAlt__item--coll3">
                                    <div class="mainServicesAltItem mainServicesAltItem--el3">
                                        <div class="mainServicesAltItem__title">Ремонтируем стиральные машины</div>
                                        <div class="mainServicesAltItem__text">Производим ремонт на дому у клиента.</div>
                                    </div>
                                </div>
                                <div class="mainServicesAlt__item mainServicesAlt__item--coll3">
                                    <div class="mainServicesAltItem mainServicesAltItem--el4">
                                        <div class="mainServicesAltItem__title">Ремонтируем сушильные машины</div>
                                        <div class="mainServicesAltItem__text">Производим ремонт любой сложности.</div>
                                    </div>
                                </div>
                                <div class="mainServicesAlt__item mainServicesAlt__item--coll3">
                                    <div class="mainServicesAltItem mainServicesAltItem--el5">
                                        <div class="mainServicesAltItem__title">Ремонтируем посудомоечные машины</div>
                                        <div class="mainServicesAltItem__text">Выезд и диагностика всегда Бесплатно.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mainServicesAlt__text">Если вы хотите ознакомится с полным перечнем услуг перейдите <a href="/prices/">сюда</a>.</div>
                        </section>					</div>



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

